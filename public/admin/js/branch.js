$(function () 
{
    



   var table = $('.branch_datatable').DataTable({
        processing: true,
        serverSide: true,
        searchDelay: 1000,
        order: [
            [0, 'ASC']
        ],
        ajax: {
            url: branchList,        
        },
        columns: [
            {data: 'DT_RowIndex', name: 'branches.id',searchable: false},
            {data: 'name', name: 'branches.name'}, 
            {data: 'email', name: 'branches.email'},
            {data: 'address', name: 'branches.address'},
            {data: 'contact', name: 'branches.contact'},
            {data: 'opened_on', name: 'branches.opened_on'}, 
            {data: 'action', name: 'action', orderable: false, searchable: false},       
         
        ]
    });
});