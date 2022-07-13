@extends('layouts.main')

@section('gate')



{{-- OVERLAY --}}
<div id="overlay" onclick="off()"></div>
<br><br><br><br>

{{-- START VARIABLE --}}
<link rel="stylesheet" href="/css/pages/company/table.css">

<div class="headsection">
 
    {{-- HEADING --}}
    <h1>Pages Data Pemasukan</h1>

    {{-- SUMMARY --}}
    <h4>Pada page ini berisi seluruh pencatatan <br> pemasukan pada PT. Sukaiwaks</h4>

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
            <th><center>Income Description</center></th>
            <th><center>Entry Date</center></th>
            <th><center>Nominal</center></th>
            <th><center>Action</center></th>
        </tr>
        <tr>
            <td colspan="99"><hr></td>
        </tr>
        
        @for ( $start = 0 ; $start < 10 ; $start++ )
            
            @php error_reporting(0); @endphp

                @if ( $incomes[$start]->id === null )

                @else
                
                <tr>

                    <td><center>{{ $number++ }}</center></td>
                    <td><center>{{ $incomes[$start]->deskripsi_pemasukan }}</center></td>
                    <td><center>{{ $incomes[$start]->tanggal_pemasukan }}</center></td>
                    <td><center>{{ $incomes[$start]->nominal_pemasukan }} L</center></td>
                    <td>
                        <center>
                            <a href="/pengguna/edit/{{ $incomes[$start]->slug_pengguna }}"><button><img src="/img/pencil_white.png" alt=""></button></a> 
                            <a href="/pengguna/destroy/{{ $incomes[$start]->slug_pengguna }}"><button><img src="/img/trash_white.png" alt=""></button></a> 
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


    

<br><br><br> @php $number = 1; @endphp





    <div class="headsection">
 
        {{-- HEADING --}}
        <h1>Pages Data Pengeluaran</h1>
    
    
        {{-- SUMMARY --}}
        <h4>Pada page ini berisi seluruh pencatatan <br> pengeluaran pada PT. Sukaiwaks</h4>
    
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
                <th><center>Expense Description</center></th>
                <th><center>Entry Date</center></th>
                <th><center>Nominal</center></th>
                <th><center>Action</center></th>>
            </tr>
            <tr>
                <td colspan="99"><hr></td>
            </tr>
            
            @for ( $start = 0 ; $start < 10 ; $start++ )
                
                @php error_reporting(0); @endphp
    
                    @if ( $expenses[$start]->id === null )
    
                    @else
                    
                    <tr>
    
                        <td><center>{{ $number++ }}</center></td>
                        <td><center>{{ $expenses[$start]->deskripsi_pengeluaran }}</center></td>
                        <td><center>{{ $expenses[$start]->tanggal_pengeluaran }}</center></td>
                        <td><center>{{ $expenses[$start]->nominal_pengeluaran }} L</center></td>
                        <td>
                            <center>
                                <a href="/pengguna/edit/{{ $expenses[$start]->slug_pengguna }}"><button><img src="/img/pencil_white.png" alt=""></button></a> 
                                <a href="/pengguna/destroy/{{ $expenses[$start]->slug_pengguna }}"><button><img src="/img/trash_white.png" alt=""></button></a> 
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































@include('pages.company.penjualan.crud')

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



