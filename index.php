<!--Your new content will be displayed in here-->
<div id="content-placeholder" data-filters="test"></div>


<script src="jquery-3.2.0.min.js"></script>
<script src="handlebars.min-d40cbfc.js"></script>
<script src="app.js"></script>

<!--This is our template. -->
<!--Data will be inserted in its according place, replacing the brackets.-->
<script id="address-template" type="text/x-handlebars-template">
    <table>

        <tr>
            <td>#</td>
            <td>Street</td>
            <td>Number</td>
            <td>City</td>
        </tr>

        {{#each addresses}}
            <tr>
                <td><a href="#{{ id }}">{{ id }}</a></td>
                <td>{{ street }}</td>
                <td>{{ number }}</td>
                <td>{{ city }}</td>
            </tr>
        {{/each}}

    </table>
</script>