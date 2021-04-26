<x-app-layout>
    <x-slot name="title">
        Dahsboard
    </x-slot>
    <div class="row">
        <x-card-sum 
            text="Total Customer" 
            value="22" 
            icon="users" 
            color="warning"
        />
        <x-card-sum 
            text="Total Visitor" 
            value="1450" 
            icon="chart-line" 
            color="primary"
        />
        <x-card-sum 
            text="Income" 
            value="$1200" 
            icon="money-bill" 
            color="success"
        />
        <x-card-sum 
            text="Total Product" 
            value="42" 
            icon="box" 
            color="danger"
        />
    </div>
    <div class="row">
        <div class="col-md-5">
            <x-card>
                <x-slot name="title">
                    Log Activity
                </x-slot>
                <table class="table">
                    <tbody>
                        <tr>
                            <td><i class="fas fa-edit mr-2 text-primary"></i> Update settings</td>
                            <td><small>12 minutes ago</small></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-plus mr-2 text-success"></i> Add user</td>
                            <td><small>2 minutes ago</small></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-trash mr-2 text-danger"></i> Delete user</td>
                            <td><small>30 minutes ago</small></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-edit mr-2 text-primary"></i> Update profile</td>
                            <td><small>1 hours ago</small></td>
                        </tr>
                    </tbody>
                </table>
            </x-card>
        </div>
        <div class="col-md-7"></div>
    </div>
</x-app-layout>