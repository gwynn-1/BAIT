<?php
/**
 * Created by PhpStorm.
 * User: Huy
 * Date: 12/7/2017
 * Time: 6:22 PM
 */
namespace App\API;

use Box\Spout\Reader;
use Box\Spout\Writer;
use Box\Spout\Common\Type;
use Illuminate\Support\Facades\DB;
use Box\Spout\Writer\Style\StyleBuilder;
use Illuminate\Support\Facades\Storage;

class excelSpout
{
    static function exportExcel($title = [],$name,$table,$query = null){
        if($query==null)
            $customer = DB::table($table)->get();
        else{
            $customer = $query;
        }

        $oExcel =  Writer\WriterFactory::create(Type::XLSX); // for XLSX files
        $oExcel->openToBrowser($name.".xlsx");

        $oExcel->addRowWithStyle($title,(new StyleBuilder())->setFontBold()->setFontSize(14)->build());
        foreach ($customer as $sheet){
            $oExcel->addRow(get_object_vars($sheet));
        }

        $oExcel->close();
    }

    static function importExcelXLSX($post_file,$title,$table,$update_function,$insert_function){
        if(isset($post_file))
        {
            $target_file = basename($post_file["name"]);
            $des_file = 'uploads/' . basename($post_file["name"]);
            $excelFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            if($excelFileType != "xlsx" ) {
                return redirect()->back()->with("error","Yêu cầu định dạng XLSX");
            }
            else {
                move_uploaded_file($_FILES["excelFile"]["tmp_name"], $des_file);
                excelSpout::import_CusDB($des_file,$title,$table,$update_function,$insert_function);
            }
            Storage::delete('public/'.$des_file);
        }

        return redirect()->back();
    }

    static private function import_CusDB($file_name,$title,$table,$update,$insert){
        $reader = Reader\ReaderFactory::create(Type::XLSX); // for XLSX files
        //$reader = ReaderFactory::create(Type::CSV); // for CSV files
        //$reader = ReaderFactory::create(Type::ODS); // for ODS files
        $reader->open($file_name);
        try {
            foreach ($reader->getSheetIterator() as $sheet) {
                foreach ($sheet->getRowIterator() as $key => $row) {
                    // do stuff with the row
                    if ($key == 1) {
                        $arr_diff = array_diff($title, $row);
                        if (count($arr_diff) != 0) {
                            $reader->close();
                            Storage::delete('public/'.$file_name);
                            return redirect()->back()->with("error", "File Excel không đúng theo mẫu");
                        }
                    } elseif ($key != 1 && $row[0] != "") {
                        $count_id = DB::table($table)->where("id", $row[0])->count();
//                        dd($count_id,$row[0]);
                        if ($count_id > 0) {
                            //Update
                            $update($row);
                        } else {
                            //Insert
                            $insert($row);
                        }
                    }
                }
            }
            $reader->close();
        }
        catch (\Exception $e){
//            dd($e->getMessage());
            if( $e->getCode() == 22007) {
                $reader->close();
                Storage::delete('public/'.$file_name);
                return redirect()->back()->with("error", "Sai kiểu dữ liệu");
            }
            if($e->getCode() == 23000){
                return redirect()->back()->with("error", "Không được trùng Sách và Độc giả");
            }
        }
    }
}