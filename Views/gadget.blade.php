<div class="panel panel-info">
    <div class="panel-heading"><h3 class="panel-title">Clip múa lân</h3></div>
    <div class="panel-body">
        @foreach($videos as $id)
        <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 15px;">
            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/{{$id}}"></iframe>
        </div>
        @endforeach
    </div>
</div>