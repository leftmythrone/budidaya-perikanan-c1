@extends('layouts.main')

@section('gate')
<br><br>
{{-- START VARIABLE --}}
@php  @endphp

<br>
<div class="headsection">
    <br>
    <h1>Pages {{ $title }}</h1>
        <form action="" method="get">
            <input type="text" name="searchfish" placeholder="Search..">
        </form>

    <button type="button">Add new Ikan + </button>

    <h2>Pages ini berisi seluruh data ikan yang harus <br>
    di kelola oleh karyawan ataupun owner
    </h2>

    {{-- JARAK --}}
    <br><br>
</div>

<div class="line">
</div>
<br>

<h1>Income</h1>
        <table width="100%">
        <tr>
            {{-- TABLE HEADER --}}
            <th><center>No</center></th> 
            <th><center>Deskripsi pemasukan</center></th>
            <th><center>Tanggal pemasukan</center></th>
            <th><center>Nominal pemasukan</center></th>

            <th><center>Action</center></th>
        </tr>
        
        @for ( $start = 0 + $end; $start < 10 + $end ; $start++ )
        <tr>
            @php error_reporting(0); @endphp

                <td><center>{{ $number++ }}</center></td>
                <td><center>{{ $incomes[$start]->deskripsi_pemasukan }}</center></td>
                <td><center>{{ $incomes[$start]->tanggal_pemasukan }}</center></td>
                <td><center>Rp. {{ number_format( $incomes[$start]->nominal_pemasukan , 0, " ,",".") }},00</center></td>
                <td>
                    <center>
                        <a href="/penjualan/income/destroy/{{ $incomes[$start]->slug_pemasukan }}">Hapus</a></a>
                        <a href="/penjualan/income/edit/{{ $incomes[$start]->slug_pemasukan }}">Edit</a>
                    </center>
                </td>
                @php error_reporting(E_ALL); @endphp

        </tr>
        @endfor
    </table>

    @php $number = 1; @endphp



    <h1>Expense</h1>
        <table width="100%">
        <tr>
            {{-- TABLE HEADER --}}
            <th><center>No</center></th> 
            <th><center>Deskripsi Pengeluaran</center></th>
            <th><center>Tanggal Pengeluaran</center></th>
            <th><center>Nominal Pengeluaran</center></th>

            <th><center>Action</center></th>
        </tr>
        
        @for ( $start = 0 + $end; $start < 10 + $end ; $start++ )
        <tr>
            @php error_reporting(0); @endphp

                <td><center>{{ $number + $start }}</center></td>
                <td><center>{{ $expenses[$start]->deskripsi_pengeluaran }}</center></td>
                <td><center>{{ $expenses[$start]->tanggal_pengeluaran }}</center></td>
                <td><center>Rp. {{ number_format( $expenses[$start]->nominal_pengeluaran , 0, " ,",".") }},00</center></td>
                <td>
                    <center>
                        <a href="/penjualan/expense/destroy/{{ $expenses[$start]->slug_pengeluaran }}">Hapus</a></a>
                        <a href="/penjualan/expense/edit/{{ $expenses[$start]->slug_pengeluaran }}">Edit</a>
                    </center>
                </td>
                @php error_reporting(E_ALL); @endphp

        </tr>
        @endfor
    </table>



    <br><br>
    <h1>Income Create New</h1>
    <table>
            
        
        <form action="/penjualan/income/store" method="post">
            @csrf
            <br>
            <tr>
                <td>Deskripsi Pemasukan</td>
                <td> : </td>
                <td>
                    <center>
                        <input type="text" name="deskripsi" value="">
                    </center>
                </td>
            </tr>
            <tr>
                <td>Tanggal_pemasukan</td>
                <td> : </td>
                <td>
                    <center>
                        <input type="date" name="tanggal" value="">
                    </center>    
                </td>
            </tr>
            <tr>
               <td>Nominal</td>
               <td> : </td>
               <td>
                   <center>
                       <input type="number" name="nominal" value="">
                       <input type="hidden" name="slug" value="@php $tabuid = uniqid('gfg', true); echo $tabuid; @endphp">
                    </center>    
               </td>
           </tr>
           </tr>

            <tr>
                <td colspan="2">
                    <center>
                        <button type="submit">Submit</button>
                    </center>
                </td>
   
            </tr>
   
            
        </form>
    </table>
   
   
   
   
   
   
    <br><br>
    <h1>Income Create New</h1>
    <table>
   
       @php error_reporting(0); @endphp
   
   
        <form action="/penjualan/income/update/{{ $inedits[0]->slug_pemasukan }}" method="post">
            @csrf
            <br>
            <tr>
                <td>Deskripsi Pemasukan</td>
                <td> : </td>
                <td>
                    <center>
                        <input type="text" name="deskripsi" value="{{ $inedits[0]->deskripsi_pemasukan }}">
                    </center>
                </td>
            </tr>
            <tr>
                <td>Tanggal_pemasukan</td>
                <td> : </td>
                <td>
                    <center>
                        <input type="date" name="tanggal" value="{{ $inedits[0]->tanggal_pemasukan }}">
                    </center>    
                </td>
            </tr>
            <tr>
               <td>Nominal</td>
               <td> : </td>
               <td>
                   <center>
                       <input type="number" name="nominal" value="{{ $inedits[0]->nominal_pemasukan }}">
                       <input type="hidden" name="slug" value="@php $tabuid = uniqid('gfg', true); echo $tabuid; @endphp">
                    </center>    
               </td>
           </tr>
   
            <tr>
                <td colspan="2">
                    <center>
                        <button type="submit">Submit</button>
                    </center>
                </td>
   
            </tr>
   
            
        </form>
   
        @php error_reporting(E_ALL); @endphp
   
    </table>













    <br><br>
    <h1>Expense Create New</h1>
    <table>
            
        
        <form action="/penjualan/expense/store" method="post">
            @csrf
            <br>
            <tr>
                <td>Deskripsi Pengeluaran</td>
                <td> : </td>
                <td>
                    <center>
                        <input type="text" name="deskripsi" value="">
                    </center>
                </td>
            </tr>
            <tr>
                <td>Tanggal_pemasukan</td>
                <td> : </td>
                <td>
                    <center>
                        <input type="date" name="tanggal" value="">
                    </center>    
                </td>
            </tr>
            <tr>
               <td>Nominal</td>
               <td> : </td>
               <td>
                   <center>
                       <input type="number" name="nominal" value="">
                       <input type="hidden" name="slug" value="@php $tabuid = uniqid('gfg', true); echo $tabuid; @endphp">
                    </center>    
               </td>
           </tr>
           </tr>

            <tr>
                <td colspan="2">
                    <center>
                        <button type="submit">Submit</button>
                    </center>
                </td>
   
            </tr>
   
            
        </form>
    </table>
   
   
   
   
   
   
    <br><br>
    <h1>Expense Create New</h1>
    <table>
   
       @php error_reporting(0); @endphp
   
   
        <form action="/penjualan/expense/update/{{ $exedits[0]->slug_pengeluaran }}" method="post">
            @csrf
            <br>
            <tr>
                <td>Deskripsi Pengeluaran</td>
                <td> : </td>
                <td>
                    <center>
                        <input type="text" name="deskripsi" value="{{ $exedits[0]->deskripsi_pengeluaran }}">
                    </center>
                </td>
            </tr>
            <tr>
                <td>Tanggal_pemasukan</td>
                <td> : </td>
                <td>
                    <center>
                        <input type="date" name="tanggal" value="{{ $exedits[0]->tanggal_pengeluaran }}">
                    </center>    
                </td>
            </tr>
            <tr>
               <td>Nominal</td>
               <td> : </td>
               <td>
                   <center>
                       <input type="number" name="nominal" value="{{ $exedits[0]->nominal_pengeluaran }}">
                       <input type="hidden" name="slug" value="@php $tabuid = uniqid('gfg', true); echo $tabuid; @endphp">
                    </center>    
               </td>
           </tr>
   
            <tr>
                <td colspan="2">
                    <center>
                        <button type="submit">Submit</button>
                    </center>
                </td>
   
            </tr>
   
            
        </form>
   
        @php error_reporting(E_ALL); @endphp
   
    </table>

@endsection


