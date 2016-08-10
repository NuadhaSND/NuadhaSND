

    <form action="/publications/delete/{{$publication->id}}" method="POST">

        {{ csrf_field() }}

        <h4 align="center">Are you sure about deleting this publication?</h4>

        <div class="form-group">

            <button type="submit" class="btn btn-primary" style="float: right;"> Yes </button>
           
        </div>

    </form>

    <a href="#close" rel="modal:close" class="btn btn-primary"> No </a>
