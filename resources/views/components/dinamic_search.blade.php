@props(['search'])

 @foreach($search as $search)
      <tr>
        <td>{{ $search->name }}</td>
        <td>{{ $search->email }}</td>
        <td>{{ $search->post }}</td>
        <td><img src="{{ asset('employees_profile/'.$search->image) }}" class="img-thumbnail" alt="" style="width: 70px;height: 70px;"></td>
        <td>
          <a href="{{ url('/'.$search->id) }}" class="btn btn-danger">
            <i class='fas fa-skull-crossbones' style='font-size:24px'></i>
          </a> | 
          <a href="{{ url('edit/'.$search->id) }}" class="btn btn-secondary">
            <i class='fas fa-edit' style='font-size:24px'></i>
          </a>
        </td>
      </tr>
  @endforeach
