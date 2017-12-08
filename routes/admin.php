<?php
/**
 * Created by PhpStorm.
 * User: Huy
 * Date: 12/7/2017
 * Time: 3:50 PM
 */
CRUD::resource('book_type','Book_typeCrudController');
CRUD::resource('book','BookCrudController');
CRUD::resource('reader','ReaderCrudController');
CRUD::resource('blog_news','Blog_newsCrudController');
CRUD::resource('borrow_detail','Borrow_detailCrudController');
CRUD::resource('comment_blog','Comment_blogCrudController');
CRUD::resource('comment_book','Comment_bookCrudController');
CRUD::resource('repcomment_blog','Repcomment_blogCrudController');
CRUD::resource('repcomment_book','Repcomment_bookCrudController');