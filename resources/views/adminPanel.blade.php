@extends('layouts.postsLayout')
@section('content')
<a href="create" class="btn btn-primary">Create</a>
<input type="text" id="myInput" onkeyup="searchInTable()" placeholder="Search by title field">
<table id="myTable" class="table">
  <thead>
    <tr>
      <th class="">id</th>
      <th class="text-center">Title</th>
      <th class="text-center">Text</th>
      <th class="text-right">Slug</th>
      <th class="column-spacer"></th>
    </tr>
  </thead>
  <tbody id="myTable2">
    @foreach ($posts as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td class="table-сenter">{{ $post->title }}</td>
        <td class="">{{ $post->text }}</td>
        <td class="text-center">{{ $post->slug }}</td>
        <td class="">
          <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
          <form action="{{ route('posts.destroy', $post->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
          </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
<script>

function searchInTable() {
  
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

</script>
@endsection