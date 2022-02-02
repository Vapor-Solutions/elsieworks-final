<div class="card ">
    <div class="card-header">
        <h4 class="card-title"> Background Images</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-shopping">
                <thead class="">
                    <tr>
                        <th class="text-center">
                            Image
                        </th>
                        <th class="text-center">
                            Name
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (glob($link . '/*.{jpg,png,gif}', GLOB_BRACE) as $key => $bg)
                        <tr>
                            <td>
                                <div class="img-container text-center">
                                    <img width="150px" src="/{{ $bg }}" alt="...">
                                </div>
                            </td>
                            <td class="td-name">
                                <a href="javascript:void(0)">{{ basename('/' . $bg) }}</a>
                                <br>
                            </td>
                            <td class="td-name">
                                @livewire('change-image', ['bg' => $bg, 'link'=>$link])
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
