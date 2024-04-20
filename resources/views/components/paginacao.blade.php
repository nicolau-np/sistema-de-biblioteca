<div>
    <nav aria-label="Contacts Page Navigation">
        @if ($objects->hasPages())
        <ul class="pagination justify-content-center m-0">
            @if ($objects->onFirstPage())
            <li class="adisabled"><a href="#" class="btn btn-default btn-sm">
                    <i class="fa fa-chevron-left"></i> Anterior</a>
            </li>
            @else
            <li class="aactivate"> <a href="{{ $objects->previousPageUrl() }}"
                    rel="prev" class="btn btn-primary btn-sm" style="color:#fff;"><span>
                        <i class="fa fa-chevron-left"></i> Anterior</span></a>
            </li>
            @endif
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            @if ($objects->hasMorePages())
            <li class="aactivate"> <a href="{{ $objects->nextPageUrl() }}" rel="next" class="btn btn-primary btn-sm" style="color:#fff;"><span>
                        Próxima <i class="fa fa-chevron-right"></i></span></a>
            </li>

            @else
            <li class="adisabled"><a href="#" class="btn btn-default btn-sm">
                    Próxima <i class="fa fa-chevron-right"></i></a>
            </li>
            @endif
        </ul>
        @endif
    </nav>
</div>
