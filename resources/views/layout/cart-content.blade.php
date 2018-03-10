@foreach($cart as $key=>$item)
<div class="cart-item-block">
    <img src="{{$item->options->image}}" alt="test" width="90" height="95">
    <div class="item-info">
        <div class="delete-item" data-rowid="{{$item->rowId}}">
            <span class="ui-icon ui-icon-close"></span>
        </div>
        <p class="book-name">{{$item->name}}</p>
    </div>
</div>
@endforeach