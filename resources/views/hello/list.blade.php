<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8" />
      <title>Quick Laravel</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  </head>
  <body>
    <table class="table">
      <tr>
        <th>No.</th>
        <th>Book name</th>
        <th>Price</th>
        <th>Publisher</th>
        <th>Published Date</th>
      </tr>

      @foreach($records as $id => $record)
        <tr>
          <td>{{ $id + 1 }}</td>
          <td>{{ $record->title }}</td>
          <td>{{ $record->price }}</td>
          <td>{{ $record->publisher }}</td>
          <td>{{ $record->published }}</td>
        </tr>
      @endforeach
    </table>
  </body>
</html>
