<div class="container">
    <div class="panel-heading">上传文件</div>
    <form class="form-horizontal" method="POST" action="/upload">
        {{--<span style="color:#ff0000;" enctype="multipart/form-data"></span>--}}
    {{ csrf_field() }}
    {{--<label for="file">选择文件</label>--}}
    <input id="file" type="file" class="form-control" name="source" required>
    <button type="submit" class="btn btn-primary">确定</button>
    </form>
</div>




