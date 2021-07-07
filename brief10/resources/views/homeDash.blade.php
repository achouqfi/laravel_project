
@extends('layouts.main');

@section('sidebar')
    
<div class="content">
    <div class="navCount">
            <div class="order">
                <i class="fa fa-shopping-cart"></i>
                <div class="info">
                    <span class="numbers">12</span>
                    <span class="name">Orders</span>
                </div>
            </div>
    
            <div class="order" style="background-color: rgb(0, 194, 0);">
            <i class="fa fa-envelope"></i>
            <div class="info">
                <span class="numbers">12</span>
                <span class="message">Messages</span>
            </div>
            </div>
    
            <div class="order" style="background-color: rgb(0, 195, 255);">
            <i class="fa fa-ticket"></i>
                <div class="info">
                    <span class="numbers">12</span>
                    <span class="reservation">Reservations</span>
                </div>
            </div>
    
            <div class="order" style="background-color: rgb(2, 109, 158);">
            <i class="fa fa-users"></i>
            <div class="info">
                <span class="numbers">12</span>
                <span class="users">Users</span>
            </div>
            </div>
    </div>
    <div class="tables">
        <div class="container">
            <div class="row">
                <div class="span5">
                    <table class="table"  >
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Date registered</th>
                            <th>Role</th>
                            <th>Status</th>                                          
                        </tr>
                    </thead>   
                    <tbody>
                        <tr>
                            <td>Andrew A. Stout</td>
                            <td>2010/08/21</td>
                            <td>User</td>
                            <td><span class="label">Inactive</span></td>                                        
                        </tr>
                        <tr>
                            <td>Mary M. Bryan</td>
                            <td>2009/04/11</td>
                            <td>Editor</td>
                            <td><span class="label label-warning">Pending</span></td>                                       
                        </tr>
                        <tr>
                            <td>Mary A. Lewis</td>
                            <td>2007/02/01</td>
                            <td>Staff</td>
                            <td><span class="label label-success">Active</span></td>                                        
                        </tr>                                   
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    
        <div class="container" >
            <div class="row">
                <div class="span5">
                    <table class="table table1" style="background-color: #00c200;"  >
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Date registered</th>
                            <th>Role</th>
                            <th>Status</th>                                          
                        </tr>
                    </thead>   
                    <tbody>
                        <tr>
                            <td>Andrew A. Stout</td>
                            <td>2010/08/21</td>
                            <td>User</td>
                            <td><span class="label">Inactive</span></td>                                        
                        </tr>
                        <tr>
                            <td>Mary M. Bryan</td>
                            <td>2009/04/11</td>
                            <td>Editor</td>
                            <td><span class="label label-warning">Pending</span></td>                                       
                        </tr>
                        <tr>
                            <td>Mary A. Lewis</td>
                            <td>2007/02/01</td>
                            <td>Staff</td>
                            <td><span class="label label-success">Active</span></td>                                        
                        </tr>                                   
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <div class="tables">
        <div class="container">
            <div class="row">
                <div class="span5">
                    <table class="table" style="background-color: #00c3ff;"  >
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Date registered</th>
                            <th>Role</th>
                            <th>Status</th>                                          
                        </tr>
                    </thead>   
                    <tbody>
                        <tr>
                            <td>Andrew A. Stout</td>
                            <td>2010/08/21</td>
                            <td>User</td>
                            <td><span class="label">Inactive</span></td>                                        
                        </tr>
                        <tr>
                            <td>Mary M. Bryan</td>
                            <td>2009/04/11</td>
                            <td>Editor</td>
                            <td><span class="label label-warning">Pending</span></td>                                       
                        </tr>
                        <tr>
                            <td>Mary A. Lewis</td>
                            <td>2007/02/01</td>
                            <td>Staff</td>
                            <td><span class="label label-success">Active</span></td>                                        
                        </tr>                                   
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    
        <div class="container" >
            <div class="row">
                <div class="span5">
                    <table class="table table1" style="background-color: #026d9e;" >
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Date registered</th>
                            <th>Role</th>
                            <th>Status</th>                                          
                        </tr>
                    </thead>   
                    <tbody>
                        <tr>
                            <td>Andrew A. Stout</td>
                            <td>2010/08/21</td>
                            <td>User</td>
                            <td><span class="label">Inactive</span></td>                                        
                        </tr>
                        <tr>
                            <td>Mary M. Bryan</td>
                            <td>2009/04/11</td>
                            <td>Editor</td>
                            <td><span class="label label-warning">Pending</span></td>                                       
                        </tr>
                        <tr>
                            <td>Mary A. Lewis</td>
                            <td>2007/02/01</td>
                            <td>Staff</td>
                            <td><span class="label label-success">Active</span></td>                                        
                        </tr>                                   
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection


{{-- </div>

</body>
</html> --}}