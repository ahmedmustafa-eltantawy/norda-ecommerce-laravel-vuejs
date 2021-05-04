<template>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="media">
                    <div class="avatar avatar-image rounded">
                        <img src="" alt="" />
                    </div>
                    <div class="m-l-10">
                        <h5 class="m-b-0">Mind Cog App</h5>
                        <span class="text-muted font-size-13">31 Tasks</span>
                    </div>
                </div>
            </div>
            <div class="m-t-20">
                <div class="d-flex justify-content-between align-items-center">
                    <button class="badge badge-pill badge-cyan">View</button>
                    <div class="dropdown dropdown-animated scale-left">
                        <a
                            class="text-gray font-size-18"
                            href="javascript:void(0);"
                            data-toggle="dropdown"
                        >
                            <span class="text-muted font-size-13"
                                >Downlaod as</span
                            >
                            <i class="anticon anticon-ellipsis"></i>
                        </a>
                        <div class="dropdown-menu">
                            <button class="dropdown-item" type="button">
                                <i class="anticon anticon-eye"></i>
                                <span class="m-l-10">PDF</span>
                            </button>
                            <button class="dropdown-item" type="button">
                                <i class="anticon anticon-edit"></i>
                                <span class="m-l-10">Excel</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
