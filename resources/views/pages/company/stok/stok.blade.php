@extends('layouts.main')

@section('gate')



{{-- OVERLAY --}}
<div id="overlay" onclick="off()"></div>
<br><br><br><br>

{{-- START VARIABLE --}}
<link rel="stylesheet" href="/css/pages/company/table.css">

<div class="headsection">
 
    {{-- HEADING --}}
    <h1>Pages {{ $title }}</h1>


    {{-- SUMMARY --}}
    <h4>Pada page ini berisi seluruh pencatatan <br> {{ $title }} pada PT. Sukaiwaks</h4>

<br><hr>

</div>
<div class="addbtn">
    <a href="/pengguna/create"><button type="button">Add new Ikan +</button></a>
</div>
<br>

<div class="tables">
        <table width="100%">
        <tr>
            {{-- TABLE HEADER --}}
            <th><center>No</center></th> 
            <th><center>Pakan Ikan</center></th>
            <th><center>Total Stock</center></th>
            <th><center>Action</center></th>
        </tr>
        <tr>
            <td colspan="99"><hr></td>
        </tr>
        
        @for ( $start = 0 ; $start < 10 ; $start++ )
            
            @php error_reporting(0); @endphp

                @if ( $stocks[$start]->id === null )

                @else
                
                <tr>

                    <td><center>{{ $number++ }}</center></td>
                    <td><center>{{ $stocks[$start]->username }}</center></td>
                    <td><center>{{ $stocks[$start]->total_stok }} Pack</center></td>
                    <td>
                        <center>
                            <a href="/pengguna/edit/{{ $stocks[$start]->slug_pengguna }}"><button><img src="/img/pencil_white.png" alt=""></button></a> 
                            <a href="/pengguna/destroy/{{ $stocks[$start]->slug_pengguna }}"><button><img src="/img/trash_white.png" alt=""></button></a> 
                        </center>
                    </td>
                
                </tr>

            @php error_reporting(E_ALL); @endphp

        <tr>
            <td colspan="99">
                <hr>
            </td>
        </tr>
        @endif

        @endfor
    </table>
    </div>

@include('pages.company.pengguna.crud')

{{-- SCRIPT --}}
@if ( $js == 1 )

{{-- SCRIPT EDIT CATEGORY --}}
<script>    
    const categoryPop = document.getElementById('addnew');
    const categoryOverlay = document.getElementById('overlay');

    categoryPop.style.display = "block";
    categoryPop.display = "none";
    categoryOverlay.style.display = "block" 
</script>

{{-- SCRIPT VIEW CATEGORY --}}
@elseif ( $js == 2 )
<script>    
    const categoryPop = document.getElementById('edit');
    const categoryOverlay = document.getElementById('overlay');

    categoryPop.style.display = "block";
    categoryPop.display = "none";
    categoryOverlay.style.display = "block"
</script>   

@endif

@endsection



