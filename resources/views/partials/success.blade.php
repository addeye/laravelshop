<?php
/**
 * Created by PhpStorm.
 * User: deye2
 * Date: 2/2/2016
 * Time: 11:24 AM
 */
?>

@if (Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>
            <i class="fa fa-check-circle fa-lg fa-fw"></i> Success.
        </strong>
        {{ Session::get('success') }}
    </div>
@endif
