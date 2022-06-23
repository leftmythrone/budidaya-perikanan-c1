@extends('layouts.main')

@section('gate')


<h1>Penjadwalan</h1>
<div class="output">
    <table width="100%">
        <tr>
            {{-- TABLE HEADER --}}
            <th><center>No</center></th> 
            <th><center>Keterangan Jadwal</center></th>
            <th><center>Tanggal Jadwal</center></th>
            <th><center>Jenis Jadwal</center></th>
            <th><center>Absen Jadwal</center></th>

            <th><center>Action</center></th>
        </tr>
        
        @for ( $start = 0 ; $start < 10 ; $start++ )
        <tr>
            @php error_reporting(0); @endphp

                <td><center>{{ $number++ }}</center></td>
                <td><center>{{ $schedules[$start]->keterangan_jadwal }}</center></td>
                <td><center>{{ $schedules[$start]->tanggal_jadwal }}</center></td>
                <td><center>{{ $schedules[$start]->jenis_jadwal }}</center></td>
                <td>
                    <center>

                        @php 

                        if ( $schedules[$start]->absen_jadwal === 1 )
                        {
                            echo 'Sudah absen';
                        }

                        else 
                        {
                            echo 'Belum absen';     
                        }
                            
                        @endphp
                    </center>
                </td>
                <td>
                    <center>
                        <a href="/penjadwalan/destroy/{{ $schedules[$start]->slug_jadwal }}">Hapus</a></a>
                        <a href="/penjadwalan/edit/{{ $schedules[$start]->slug_jadwal }}">Edit</a>
                    </center>
                </td>

                @php error_reporting(E_ALL); @endphp
        </tr>
        @endfor
    </table>
 </div>


    <br><br>
    <h1>Create New</h1>
    <table>
            
        
        <form action="/penjadwalan/store" method="post">
            @csrf
            <br>
            <tr>
                <td>Deskripsi Jadwal</td>
                <td> : </td>
                <td>
                    <center>
                        <input type="text" name="deskripsi" value="">
                    </center>
                </td>
            </tr>
            <tr>
                <td>Tanggal Jadwal</td>
                <td> : </td>
                <td>
                    <center>
                        <input type="date" name="tanggal" value="">
                    </center>    
                </td>
            </tr>
            <tr>
                <td>Kategori Jadwal</td>
                <td> : </td>
                <td>
                    <center>
                        {{-- DATA LIST INPUT CATEGORY --}}
                        <select name="kategori">
                            @foreach ($schecats as $opt)
                                <option value="{{ $opt->id }}">{{ $opt->jenis_jadwal }}</option> 
                            @endforeach
                        </select>   
                    </center>
                </td>

                {{-- AUTO GENERATE --}}
                <input type="hidden" name="slug" value="@php $tabuid = uniqid('gfg', true); echo $tabuid; @endphp">
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
    <h1>Create New</h1>
    <table>
            
        @php error_reporting(0); @endphp

        <form action="/penjadwalan/update/{{ $edits[0]->slug_jadwal }}" method="post">
            @csrf
            <br>
            <tr>
                <td>Deskripsi Jadwal</td>
                <td> : </td>
                <td>
                    <center>
                        <input type="text" name="deskripsi" value="{{ $edits[0]->keterangan_jadwal }}">
                    </center>
                </td>
            </tr>
            <tr>
                <td>Tanggal Jadwal</td>
                <td> : </td>
                <td>
                    <center>
                        <input type="date" name="tanggal" value="{{ $edits[0]->tanggal_jadwal }}">
                    </center>    
                </td>
            </tr>
            <tr>
                <td>Kategori Jadwal</td>
                <td> : </td>
                <td>
                    <center>
                        {{-- DATA LIST INPUT CATEGORY --}}
                        <select name="kategori">
                            @foreach ($schecats as $opt)
                                <option value="{{ $opt->id }}">{{ $opt->jenis_jadwal }}</option> 
                            @endforeach
                        </select>   
                    </center>
                </td>

                {{-- AUTO GENERATE --}}
                <input type="hidden" name="slug" value="@php $tabuid = uniqid('gfg', true); echo $tabuid; @endphp">
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



