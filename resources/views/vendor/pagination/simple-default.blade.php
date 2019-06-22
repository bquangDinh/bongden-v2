<style media="screen">
  .pagination{
      margin-bottom: -100px;
  }

  .pagination li{
    background-color: #1FB6FF;
    width: 50vw;
    height: 120px;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: all .2s;
  }

  .pagination li:hover{
    filter: brightness(85%);
  }

  .pagination li a,li span{
    font-weight: bold;
    font-size: 1.5em;
    color: white;
    font-family: Comfortaa-Bold;
  }

  .pagination li:first-child{
      border-right: 1px solid gray;
  }

  .pagination .disabled{
    background-color: darkgray;
  }
</style>


@if ($paginator->hasPages())
    <ul class="pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled" aria-disabled="true"><span>Trước</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev" style="text-decoration: none">Trước</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next" style="text-decoration: none">Xem thêm</a></li>
        @else
            <li class="disabled" aria-disabled="true"><span>Xem thêm</span></li>
        @endif
    </ul>
@endif
