<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 2/4/2018
 * Time: 2:00 PM
 */?>
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form action="/upload" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name ="file_upload">
    <input type="submit" name = 'submit' value="Save">
</form>