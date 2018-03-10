<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ReaderRequest as StoreRequest;
use App\Http\Requests\ReaderRequest as UpdateRequest;
use App\API\excelSpout;
use App\Models\Reader;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ReaderCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Reader');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/reader');
        $this->crud->setEntityNameStrings('reader', 'readers');

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
             'type'  => 'text'], 'create');
         $this->crud->addFields([
             ['name'  => 'mssv', // DB column name (will also be the name of the input)
             'label' => 'MSSV', // the human-readable label for the input
             'type'  => 'text'],
             ['name'  => 'name', // DB column name (will also be the name of the input)
                 'label' => 'Tên', // the human-readable label for the input
                 'type'  => 'text'],
             [
                 'name'        => 'gender', // the name of the db column
                 'label'       => 'Giới tính', // the input label
                 'type'        => 'radio',
                 'options'     => [ // the key will be stored in the db, the value will be shown as label;
                     "Nam" => "Nam",
                     "Nữ" => "Nữ"
                 ],
                 'inline'      => true, // show the radios all on the same line?
             ],
             ['name'  => 'school', // DB column name (will also be the name of the input)
                 'label' => 'Trường', // the human-readable label for the input
                 'type'  => 'text'],
             ['name'  => 'email', // DB column name (will also be the name of the input)
                 'label' => 'Email',
                 'type'=>'email'],
             ['name'  => 'sdt', // DB column name (will also be the name of the input)
                 'label' => 'Số điện thoại', // the human-readable label for the input
                 'type'  => 'number'],
             ['name'  => 'facebook', // DB column name (will also be the name of the input)
                 'label' => ' Facebook', // the human-readable label for the input
                 'type'  => 'text']
         ], 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
         $this->crud->addColumns([
             ['name'  => 'id', // DB column name (will also be the name of the input)
                 'label' => 'ID', // the human-readable label for the input
                 'type'  => 'text'],
             ['name'  => 'mssv', // DB column name (will also be the name of the input)
                 'label' => 'MSSV', // the human-readable label for the input
                 'type'  => 'text'],
             ['name'  => 'name', // DB column name (will also be the name of the input)
                 'label' => 'Tên', // the human-readable label for the input
                 'type'  => 'text'],
             ['name'  => 'school', // DB column name (will also be the name of the input)
                 'label' => 'Trường', // the human-readable label for the input
                 'type'  => 'text'],
             ['name'  => 'email', // DB column name (will also be the name of the input)
                 'label' => 'Email',
                 'type'=>'email'],
             ['name'  => 'sdt', // DB column name (will also be the name of the input)
                 'label' => 'Số điện thoại', // the human-readable label for the input
                 'type'  => 'number'],
             ['name'  => 'facebook', // DB column name (will also be the name of the input)
                 'label' => ' Facebook', // the human-readable label for the input
                 'type'  => 'text'],
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
        excelSpout::exportExcel(['ID','MSSV','Tên','Trường','Email','SĐT','facebook','created_at','updated_at']
            ,"reader","readers");
    }

    public function ImportExcelAction()
    {
        return excelSpout::importExcelXLSX($_FILES['excelFile']
            ,['ID','MSSV','Tên','Trường','Email','SĐT','facebook']
            ,'readers',function($row){
                Reader::where("id",$row[0])->update([
                    "mssv"=>$row[1],
                    "name"=>$row[2],
                    "school"=>$row[3],
                    'email'=>$row[4],
                    'sdt'=>$row[5],
                    'facebook'=>$row[6]
                ]);
            },function($row){
                Reader::create([
                    "id"=>$row[0],
                    "mssv"=>$row[1],
                    "name"=>$row[2],
                    "school"=>$row[3],
                    'email'=>$row[4],
                    'sdt'=>$row[5],
                    'facebook'=>$row[6],
                    'password'=>"not-null"
                ]);
            });
    }

    public function store(StoreRequest $request)
    {
        DB::statement("ALTER TABLE readers AUTO_INCREMENT=1");
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
