  <label>City</label>
  <select class="chzn-select" name="regency_id" required>
    <option value="" selected> --- City --- </option>
    @foreach ($regency as $item)
      <option value="{{ $item->id }}">{{ $item->name }}</option>
    @endforeach
  </select>

  <script>
    $(document).ready(function() {
      $(".chzn-select").chosen()

    });
  </script>
