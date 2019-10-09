<form action="{{ route($routeName.'.destroy' , ['id' => $item]) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('delete') }}
    <a href="{{ route($routeName.'.edit' , ['id' => $item]) }}" rel="tooltip" title="" class="btn btn-info" data-original-title="Edit {{ $sModuleName }}">
            <i class="material-icons">تعديل</i>
        </a>
    <button type="submit" rel="tooltip" title="" class="btn btn-danger"  onclick="check()" data-original-title="Remove {{ $sModuleName }}">
        <i class="material-icons">حذف</i>
    </button>
</form>