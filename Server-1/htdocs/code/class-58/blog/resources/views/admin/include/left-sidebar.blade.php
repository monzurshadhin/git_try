<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-cart-plus-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Settings">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-settings" type="button"><i class="bi bi-gear-fill"></i></button>
            </li>

        </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <img src="{{asset("admin-asset")}}/assets/images/brand-logo-2.png" width="140" alt=""/>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="pills-dashboards">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Dashboards</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('dashboard')}}" class="list-group-item"><i class="bi bi-cart-plus"></i>Dashboard</a>

                </div>
            </div>
            <div class="tab-pane fade" id="pills-settings">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Settings</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('add.category')}}" class="list-group-item"><i class="bi bi-plus-circle"></i>Add Category</a>
                    <a href="{{route('manage.category')}}" class="list-group-item"><i class="bi bi-kanban"></i>Manage Category</a>
                    <a href="{{route('add.blog')}}" class="list-group-item"><i class="bi bi-plus-circle"></i>Add Blog</a>
                    <a href="{{route('manage.blog')}}" class="list-group-item"><i class="bi bi-kanban"></i>Manage Blog</a>

                </div>
            </div>

        </div>
    </div>
</aside>
