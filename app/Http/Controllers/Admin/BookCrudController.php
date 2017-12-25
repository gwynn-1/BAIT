<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\BookRequest as StoreRequest;
use App\Http\Requests\BookRequest as UpdateRequest;
use App\API\excelSpout;
use App\API\URLCreator;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BookCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Book');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/book');
        $this->crud->setEntityNameStrings('book', 'books');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

//        $this->crud->setFromDb();
        $this->crud->setListView("backpack::crud.list-bait");
        $this->crud->setEditView("backpack::crud.edit-bait");
        $this->crud->setCreateView("backpack::crud.create-bait");

        // ------ CRUD FIELDS
         $this->crud->addField(
             ['name'  => 'id', // DB column name (will also be the name of the input)
             'label' => 'ID', // the human-readable label for the input
             'type'  => 'number'], 'create');
         $this->crud->addFields([
             ['name'  => 'name', // DB column name (will also be the name of the input)
                 'label' => 'Tên', // the human-readable label for the input
                 'type'  => 'text'],
             ['name'  => 'detail', // DB column name (will also be the name of the input)
                 'label' => 'Chi Tiết', // the human-readable label for the input
                 'type'  => 'ckeditor'],
             ['name'  => 'id_type', // DB column name (will also be the name of the input)
                 'label' => 'Thể loại', // the human-readable label for the input
                 'type'  => 'select2',
                 'entity'=>'book_type',
                 'attribute'=>'name',
                 'model'=>'App\Models\Book_type'],
             ['name'  => 'author', // DB column name (will also be the name of the input)
                 'label' => 'Tác giả', // the human-readable label for the input
                 'type'  => 'text'],
             ['name'  => 'image', // DB column name (will also be the name of the input)
                 'label' => 'Hình ảnh', // the human-readable label for the input
                 'upload' => true,
                 'type'=>'image',
                 'crop' => false, // set to true to allow cropping, false to disable
                 'aspect_ratio' => 0, // ommit or set to 0 to allow any aspect ratio
                  'prefix' => 'book_image/'],
             ['name'  => 'total', // DB column name (will also be the name of the input)
                 'label' => 'Tổng số sách', // the human-readable label for the input
                 'type'  => 'text'],
             ['name'  => 'available', // DB column name (will also be the name of the input)
                 'label' => ' Sách còn lại', // the human-readable label for the input
                 'type'  => 'text'],
             ['name'  => 'borrow_time', // DB column name (will also be the name of the input)
                 'label' => 'Ngày được mượn', // the human-readable label for the input
                 'type'  => 'text'],
             ['name'  => 'recommend_book', // DB column name (will also be the name of the input)
                 'label' => 'Sách hay', // the human-readable label for the input
                 'type'        => 'radio',
                 'options'     => [ // the key will be stored in the db, the value will be shown as label;
                     0 => "sai",
                     1 => "đúng"]
             ],
         ], 'create/update/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
         $this->crud->addColumns([
             ['name'  => 'id', // DB column name (will also be the name of the input)
                 'label' => 'ID', // the human-readable label for the input
                 'type'  => 'text'],
             ['name'  => 'name', // DB column name (will also be the name of the input)
                 'label' => 'Tên', // the human-readable label for the input
                 'type'  => 'text'],
             ['name'  => 'detail', // DB column name (will also be the name of the input)
                 'label' => 'Chi Tiết', // the human-readable label for the input
                 'type'  => 'text'],
             ['name'  => 'id_type', // DB column name (will also be the name of the input)
                 'label' => 'Thể loại', // the human-readable label for the input
                 'type'  => 'select',
                 'entity'=>'Book_type',
                 'attribute'=>'name',
                 'model'=>'App\Models\Book_type'],
             ['name'  => 'author', // DB column name (will also be the name of the input)
                 'label' => 'Tác giả', // the human-readable label for the input
                 'type'  => 'text'],
             ['name'  => 'image', // DB column name (will also be the name of the input)
                 'label' => 'Hình ảnh', // the human-readable label for the input
                 'type'  => 'image',
                 'prefix'=>'book_image/',
                 'width'=>'100px',
                 'height'=>'150px'],
             ['name'  => 'total', // DB column name (will also be the name of the input)
                 'label' => 'Tổng số sách', // the human-readable label for the input
                 'type'  => 'text'],
             ['name'  => 'available', // DB column name (will also be the name of the input)
                 'label' => ' Sách còn lại', // the human-readable label for the input
                 'type'  => 'text'],
             ['name'  => 'borrow_time', // DB column name (will also be the name of the input)
                 'label' => 'Ngày được mượn', // the human-readable label for the input
                 'type'  => 'text'],
             ['name'  => 'recommend_book', // DB column name (will also be the name of the input)
                 'label' => 'Sách hay', // the human-readable label for the input
                 'type'        => 'text'],
             ['name'  => 'created_at', // DB column name (will also be the name of the input)
                 'label' => 'Created At', // the human-readable label for the input
                 'type'  => 'text'],
             ['name'  => 'updated_at', // DB column name (will also be the name of the input)
                 'label' => 'Updated At', // the human-readable label for the input
                 'type'  => 'text']
         ]); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

    public function ExportExcelAction()
    {
        excelSpout::exportExcel(['id','tên','chi tiết','id thể loại','tác giả','hình ảnh','tổng số sách','sách còn lại','ngày được mượn','Sách hay','url','created_at','updated_at']
                                ,"book","books");
    }

    public function ImportExcelAction()
    {
        return excelSpout::importExcelXLSX($_FILES['excelFile']
            ,['id','tên','chi tiết','id thể loại','tác giả','hình ảnh','tổng số sách','sách còn lại','ngày được mượn','Sách hay']
            ,'books',function($row){
            Book::where("id",$row[0])->update([
                "name"=>$row[1],
                "detail"=>$row[2],
                "id_type"=>$row[3],
                'author'=>$row[4],
                'image'=>$row[5],
                'total'=>$row[6],
                'available'=>$row[7],
                'borrow_time'=>$row[8],
                'recommend_book'=>$row[9]=="" ? 0 : $row[9],
                'url_book'=>URLCreator::htaccess_String($row[1])
            ]);
        },function($row){
            Book::create([
                "id"=>$row[0],
                "name"=>$row[1],
                "detail"=>$row[2],
                "id_type"=>$row[3],
                'author'=>$row[4],
                'image'=>$row[5],
                'total'=>$row[6],
                'available'=>$row[7],
                'borrow_time'=>$row[8],
                'recommend_book'=>$row[9]=="" ? 0 : $row[9],
            ]);

            Book::where("id",$row[0])->update([
                "url_book"=>URLCreator::htaccess_String($row[1])
            ]);
        });
    }

    public function store(StoreRequest $request)
    {
        DB::statement("ALTER TABLE books AUTO_INCREMENT=1");
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry

        Book::where("name",$request->input("name"))->update([
            "url_book" => URLCreator::htaccess_String($request->input("name"))
        ]);
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        $image = DB::table("books")->select("image")->where("id",$request->input("id"))->get();
        if($image[0]->image!=null && $image[0]->image!=basename($request->input("image")))
            Storage::disk("public")->delete("book_image/".$image[0]->image);
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        Book::where("id",$request->input("id"))->update([
            "url_book" => URLCreator::htaccess_String($request->input("name"))
        ]);
        return $redirect_location;
    }
}
