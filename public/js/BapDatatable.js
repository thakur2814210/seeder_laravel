
$.extend(true, jQuery.fn.dataTable.defaults, {
    // Global datatable settings

});
/**
 * @type {{init: BAP_Datatable.init, newRelation: BAP_Datatable.newRelation, addSelected: BAP_Datatable.addSelected, linkRelation: BAP_Datatable.linkRelation, unlinkRelation: BAP_Datatable.unlinkRelation}}
 */
var BAP_Datatable = {

    init: function () {
        this.unlinkRelation();
        this.linkRelation();
        this.addSelected();
        this.newRelation();
    },


    /**
     * 1. Show create form
     * 2. Post create form data
     * 3. Refresh linked datatable
     */
    newRelation: function(){

        $(document).on("click",".modal-new-relation",function(e){

            e.preventDefault();

            var modal = $(this).parent().find('.modal');

            modal.find('.modal-body').load(modal.attr('data-create-route'),function(result){
                modal.modal('toggle');
                BAP_Common.initComponents();
                $.AdminBSB.input.activate();


            });

        });

        $(document).on("submit",".related-modal-form",function(e){

            e.preventDefault();

            var form = $(e.target);

           $.post(form.attr('action'),form.serialize(),function(result){

               $(form).parents('.modal').modal('toggle'); // close parent

               if(result.action == 'refresh_datatable'){

                   BAP_Common.showNotification('bg-green', result.message);

                   var linkedDataTable = $(form).parents('.related_module_wrapper').find('.linked-records').find('table').dataTable();
                   linkedDataTable.DataTable().ajax.reload();
               }

               if(result.action == 'show_message'){
                   BAP_Common.showNotification('bg-red', result.message);
               }

           });

        });
    },

    /**
     * Add selected to relation
     */
    addSelected: function(){

        $(document).on("submit",".link-selected",function(e){
            e.preventDefault();

            var form = $(e.target);

            var modalTableName = $(form).find('input[name=modalName]');
            var modalDataTable = $($('#'+modalTableName.val()).find('table').first()).dataTable();

            var checkedElements = [];

            var rowcollection = modalDataTable.$(".call-checkbox:checked", {"page": "all"});

            rowcollection.each(function(index,elem){
                checkedElements.push($(elem).val());
            });

            $(form).find('input[name=relationEntityIds]').val(JSON.stringify(checkedElements));

            $.post(form.attr('action'),form.serialize(),function(result){

                if(result.action == 'refresh_datatable'){

                    BAP_Common.showNotification('bg-green', result.message);

                    // DataTable in modal popup
                    modalDataTable.DataTable().ajax.reload();

                    // Refresh linked datatable
                    var linkedTableName = $(form).find('input[name=linkedName]');
                    var linkedDataTable = $($('#'+linkedTableName.val()).find('table').first()).dataTable();
                    linkedDataTable.DataTable().ajax.reload();

                }
                if(result.action == 'show_message'){

                    BAP_Common.showNotification('bg-red', result.message);

                }

                $('#'+modalTableName.val()).modal('toggle');

            });
        });
    },

    /**
     * Link Relation Modal
     */
    linkRelation: function(){


        $(document).on("click",".modal-relation",function(e){

            e.preventDefault();

            var modal = $(this).parent().find('.modal');

            modal.modal('toggle');
        });

    },

    /**
     * Unlink Relation
     */
    unlinkRelation: function () {

        $(document).on("submit",".unlink-relation",function(e){
            e.preventDefault();

            var form = $(e.target);

            $.post(form.attr('action'),form.serialize(),function(result){

                if(result.action == 'refresh_datatable'){

                    BAP_Common.showNotification('bg-green', result.message);

                    var table = form.closest('table').DataTable().ajax.reload();
                }
                if(result.action == 'show_message'){
                    alert(result.message);

                    BAP_Common.showNotification('bg-red', result.message);
                }

            });
        });

    },
};

BAP_Datatable.init();


