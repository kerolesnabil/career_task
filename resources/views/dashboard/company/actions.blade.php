<div class="d-inline-block" >

    <form action="{{route('company.destroy',$row['id'])}}" method="post">

        {{ csrf_field() }}
        {{ method_field('delete') }}

        <button type="submit" class="edit btn btn-danger btn-sm">
            delete
        </button>
    </form><a href="{{route('company.edit',$row['id'])}}" class="edit btn btn-primary btn-sm">Edit</a>

</div>
