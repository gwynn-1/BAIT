@php
    $keyName = isset($column['key']) ? $column['key'] : $column['name'];
    $entryValue=$entry->{$keyName};
    $displayValue = isset($column['options'][$entryValue]) ? $column['options'][$entryValue] : '';
@endphp

<td data-order="{{ $entry->{$column['name']} }}">

    @if ( $displayValue!="null")

        <form>
            <div class="pretty p-icon p-round p-pulse">
                <input type="checkbox" class="my-checkbox-{{$column['name']}}" @if($displayValue=="1") checked  @endif @if($displayValue=="0" && $column['name']=="is_keep") disabled  @endif />
                <div class="state p-success">
                    <i class="icon mdi mdi-check"></i>
                    <label>Có</label>
                </div>
            </div>
        </form>
    @elseif($displayValue=="null")
            null
    @endif
</td>