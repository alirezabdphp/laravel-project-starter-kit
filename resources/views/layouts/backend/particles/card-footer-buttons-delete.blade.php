<div class="row justify-content-end pb-0 mb-2">
    <div class="col-md-2">
        <a  href="{{route($back_route)}}" class="btn btn-primary float-left btn-sm btn-block rounded-0 bg-50"><i class="fa fa-list mr-2"></i> {{__('app.no_take_me_back')}}</a>
    </div>

    <div class="col-md-2">
        <form action="{{ route($delete_route, $delete_id) }}" method="post" id="delete"> @csrf @method('delete')
            <button class="btn btn-danger btn-sm btn-block float-left rounded-0"><i class="fa fa-trash mr-2"></i> {{__('app.yes_i_am_sure')}}</button>
        </form>
    </div>
</div>

