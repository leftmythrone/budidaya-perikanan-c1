@extends('layouts.main')

@section('gate')
<link rel="stylesheet" href="/css/pages/company/table.css">
<h1>{{ $title }}</h1>
<div class="output">
    <table width="100%">
        <tr>
            {{-- TABLE HEADER --}}
            <th><center>No</center></th>
            <th><center>Nama Depan</center></th> 
            <th><center>Nama Belakang</center></th>
            <th><center>Email Pengguna</center></th>
            <th><center>Nomor Pengguna</center></th>
            <th><center>Alamat Pengguna</center></th>
            <th><center>Level</center></th>

            <th><center>Action</center></th>
        </tr>
        
        @for ( $start = 0 ; $start < 10 ; $start++ )
        <tr>
            @php error_reporting(0); @endphp

                <td><center>{{ $number++ }}</center></td>
                <td><center>{{ $users[$start]->nama_depan_pengguna }}</center></td>
                <td><center>{{ $users[$start]->nama_depan_pengguna }}</center></td>
                <td><center>{{ $users[$start]->email_pengguna }}</center></td>
                <td><center>{{ $users[$start]->nomor_pengguna }}</center></td>
                <td><center>{{ $users[$start]->email_pengguna }}</center></td>
                <td><center>{{ $users[$start]->jenis_peran }}</center></td>
                <td>
                    <center>
                        <a href="/pengguna/destroy/{{ $users[$start]->slug_pengguna }}">Hapus</a></a>
                        <a href="/pengguna/edit/{{ $users[$start]->slug_pengguna }}">Edit</a>
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
         
     
     <form action="/pengguna/store" method="post">
         @csrf
         <br>
         <tr>
             <td>Nama Depan</td>
             <td> : </td>
             <td>
                 <center>
                     <input type="text" name="depan" value="">
                 </center>
             </td>
         </tr>
         <tr>
             <td>Nama Belakang</td>
             <td> : </td>
             <td>
                 <center>
                     <input type="text" name="belakang" value="">
                 </center>    
             </td>
         </tr>
         <tr>
            <td>Email</td>
            <td> : </td>
            <td>
                <center>
                    <input type="email" name="email" value="">
                </center>    
            </td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td> : </td>
            <td>
                <center>
                    <input type="text" name="nomor" value="">
                </center>    
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> : </td>
            <td>
                <center>
                    <input type="text" name="alamat" value="">
                </center>    
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td> : </td>
            <td>
                <center>
                    <input type="password" name="password" value="">
                </center>    
            </td>
        </tr>
         <tr>
             <td>Level</td>
             <td> : </td>
             <td>
                 <center>
                     {{-- DATA LIST INPUT CATEGORY --}}
                     <select name="peran">
                         @foreach ($roles as $opt)
                             <option value="{{ $opt->id }}">{{ $opt->jenis_peran }}</option> 
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


     <form action="/pengguna/update/{{ $edits[0]->slug_pengguna }}" method="post">
         @csrf
         <br>
         <tr>
             <td>Nama Depan</td>
             <td> : </td>
             <td>
                 <center>
                     <input type="text" name="depan" value="{{ $edits[0]->nama_depan_pengguna }}">
                 </center>
             </td>
         </tr>
         <tr>
             <td>Nama Belakang</td>
             <td> : </td>
             <td>
                 <center>
                     <input type="text" name="belakang" value="{{ $edits[0]->nama_belakang_pengguna }}">
                 </center>    
             </td>
         </tr>
         <tr>
            <td>Email</td>
            <td> : </td>
            <td>
                <center>
                    <input type="email" name="email" value="{{ $edits[0]->email_pengguna }}">
                </center>    
            </td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td> : </td>
            <td>
                <center>
                    <input type="text" name="nomor" value="{{ $edits[0]->nomor_pengguna }}">
                </center>    
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> : </td>
            <td>
                <center>
                    <input type="text" name="alamat" value="{{ $edits[0]->alamat_pengguna }}">
                </center>    
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td> : </td>
            <td>
                <center>
                    <input type="password" name="password" value="">
                </center>    
            </td>
        </tr>
         <tr>
             <td>Level</td>
             <td> : </td>
             <td>
                 <center>
                     {{-- DATA LIST INPUT CATEGORY --}}
                     <select name="peran">
                         @foreach ($roles as $opt)
                             <option value="{{ $opt->id }}">{{ $opt->jenis_peran }}</option> 
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


