@extends('admin.administrator.layout')
@section('adminPages')
    <div class="dashWrapper" x-data="{query:'',
        showResult: false,
        users: [],
        getUsers: function(){
            axios.get('/search?q=' + this.query)
            .then(response => {
            this.users = response.data
            this.showResult = true
            })
            .catch(error => console.log(error));
        }
    }">
        <div class="adminHomePageTitle">Edit Package</div>
        <div class="formEdit">
            <form action="{{route('package.updateOwner', $package->id)}}" method="POST" class="registerEmployeeForm">
                @csrf
                @method('PUT')
                <label class="formLabel" for="owner">Employees: Change Owner</label>
                <input type="text" class="formInputProfile" x-model="query" x-on:keyup.debounce.500ms="getUsers" placeholder="Type the email of the user">
                <select x-show="showResult" name="user_id" id="owner" style="height: 200px" id="" multiple>
                    <template x-for="user in users" >
                        <option  x-text="user.email" :value="user.id"></option>
                    </template>
                </select>
                <button type="submit" class="adminButton">Update</button>
            </form>
        </div>
    </div>
    <script src="//unpkg.com/alpinejs" defer></script>
@endsection
