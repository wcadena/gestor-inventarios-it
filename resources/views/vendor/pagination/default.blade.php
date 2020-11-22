@if ($paginator->hasPages())
    <div class="container-fluid row">
        <div class="col-12">
            <div class="row justify-content-center d-none d-sm-block d-md-none d-block d-sm-none">

                @if ($paginator->onFirstPage())
                    <span >
                    {!! __('pagination.previous') !!}
                </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-sm btn-primary">
                        {!! __('pagination.previous') !!}
                    </a>
                @endif

                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-sm btn-primary" >
                        {!! __('pagination.next') !!}
                    </a>
                @else
                    <span >
                    {!! __('pagination.next') !!}
                </span>
                @endif
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-12">
            <div class="row justify-content-center d-none d-xl-block d-lg-block d-xl-none d-md-block d-lg-none">
                <div class="col-sm-12 col-md-4">
                    <p class="text-sm text-gray-700 leading-5">
                        {!! __('Showing') !!}
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                        {!! __('of') !!}
                        <span class="font-medium">{{ $paginator->total() }}</span>
                        {!! __('results') !!}
                    </p>
                </div>
                <div class="col-sm-12 col-md-7 justify-content-end">
                    <ul class="pagination">
                        {{-- Previous Page Link --}}
                        @if ($paginator->onFirstPage())
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0)" aria-label="{{ __('Estas Aqui') }}">
                                <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                                    <i class="fa fa-angle-left"></i>
                                </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="{{ __('pagination.previous') }}">
                                <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                                    <i class="fa fa-angle-left"></i>
                                </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                        @endif
                        @foreach ($elements as $element)
                            {{-- "Three Dots" Separator --}}
                            @if (is_string($element))
                                <span aria-disabled="true">
                                <span >{{ $element }}</span>
                            </span>
                            @endif

                            {{-- Array Of Links --}}
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript:void(0)" aria-label="{{ __('Estas Aqui') }}">
                                                {{ $page }}
                                            </a>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $url }}" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                                {{ $page }}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        {{-- Next Page Link --}}
                        @if ($paginator->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="{{ __('pagination.next') }}">
                                <span aria-hidden="true">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0)" aria-label="{{ __('Estas Aqui') }}">
                                <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif
