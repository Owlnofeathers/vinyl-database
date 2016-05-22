{!! Form::open(['method'=>'GET','url'=>$url,'class'=>'form-inline','role'=>'search'])  !!}
<div class="form-group custom-search-form">
    <input type="text" class="form-control" name="search" placeholder="Search...">
    <button class="btn btn-default" type="submit">
        <span class="glyphicon glyphicon-search"></span>
    </button>
</div>
{!! Form::close() !!}
<br>