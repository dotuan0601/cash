<tbody>
@foreach(array_chunk($fixes,5) as $fixs)
<tr>
    @foreach($fixs as $fix)
    <td><a >{{$fix}} <div @if(in_array($fix,$times)) class="booking-red" @else class="booking-green" @endif></div></a></td>
    @endforeach

</tr>
@endforeach
</tbody>