<h3>Search Result</h3>


<div class="alert">
    @if(!$results->count())
    <h3>No Results </h3>
    @else
    @foreach($results as $result)
    <p> {{$result->title}} </p>
    @endforeach
    @endif
</div>
