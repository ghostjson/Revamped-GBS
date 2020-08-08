<link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<style>
    .container{
        padding: 20px !important;
    }
    td{
        text-align: center;
    }
</style>

<h1>
    Contacts
</h1>

<div class="container">
    <table id="table" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Company</th>
            <th>Service</th>
        </tr>
        </thead>

        <tbody>

            <?php foreach ($contacts as $contact): ?>

                <tr>
                    <td><?= $contact->name ?></td>
                    <td><?= $contact->phone ?></td>
                    <td><?= $contact->email ?></td>
                    <td><?= $contact->company ?></td>
                    <td><?= $contact->service ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>

        <tfoot>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Company</th>
            <th>Service</th>
        </tr>
        </tfoot>
    </table>
</div>

<script>
    $(document).ready( function () {
        $('#table').DataTable();
    } );
</script>

