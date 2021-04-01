@extends('admin_layout')
@section('admin_content')
<?php
                                $name = Session::get('admin_name');
                                if ($name) {
                                    echo  '<h4>Ngày mới tốt lành '.$name.' ! </h4>';
                                }
                                ?>

@endsection
