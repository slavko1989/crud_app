@props(['show'])

 @foreach($show as $show)
      <tr>
        <td>{{ $show->name }}</td>
        <td>{{ $show->email }}</td>
        <td>{{ $show->post }}</td>
        <td><img src="{{ asset('employees_profile/'.$show->image) }}" class="img-thumbnail" alt="" style="width: 70px;height: 70px;"></td>
        <td>
          <a href="{{ url('/'.$show->id) }}" class="btn btn-danger">
            <i class='fas fa-skull-crossbones' style='font-size:24px'></i>
          </a> | 
          <a href="{{ url('edit/'.$show->id) }}" class="btn btn-secondary">
            <i class='fas fa-edit' style='font-size:24px'></i>
          </a>
        </td>
      </tr>
  @endforeach
