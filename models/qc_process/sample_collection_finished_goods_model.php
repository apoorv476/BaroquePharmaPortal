 <style type="text/css">
.mt-6{margin-top: -6px !important;}
 </style>


    <!-- --------inventory transfer------------ -->

<div class="modal fade inventory_transfer_retails_issue" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Inventory Transfer retails issue </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <!-- form start -->
                 <form role="form" class="form-horizontal" id="inventory_transfer_form_issue_retails_inventory" method="post">
                    <input type="text" name="it_InventoryTransfer_BPLId" id="it_InventoryTransfer_BPLId" class="form-control ">
                    <input type="text" name="it_InventoryTransfer_DocEntry" id="it_InventoryTransfer_DocEntry" class="form-control ">
                     
                                     <div class="row">

                                        <!-- <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Supplier Code</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="iT_InventoryTransfer_supplier_code" name="iT_InventoryTransfer_supplier_code" readonly>
                                                </div>
                                            </div>
                                        </div> -->

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Series</label>
                                               <div class="col-lg-4">
                                                     <input class="form-control desabled" readonly type="number" id="iT_InventoryTransfer_DocNo" name="iT_InventoryTransfer_DocNo">
                                                   
                                                </div>
                                                 <div class="col-lg-4">
                                                    <select class="form-control desabled" readonly type="text" id="iT_InventoryTransfer_DocName" name="iT_InventoryTransfer_DocName"></select>
                                                </div>
                                                 <!-- <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="iT_InventoryTransfer_series" name="iT_InventoryTransfer_series" readonly>
                                                </div> -->
                                            </div>
                                        </div>

                                        <!-- <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Supplier Name</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="iT_InventoryTransfer_supplier_name" name="iT_InventoryTransfer_supplier_name" readonly>
                                                </div>
                                            </div>
                                        </div> -->

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Branch</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="iT_InventoryTransfer_branch" name="iT_InventoryTransfer_branch" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Base DocType</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="iT_InventoryTransfer_BaseDocType" name="iT_InventoryTransfer_BaseDocType" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Posting Date</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control" type="date" id="iT_InventoryTransfer_PostingDate" name="iT_InventoryTransfer_PostingDate">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Document Date</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control" type="date" id="iT_InventoryTransfer_DocumentDate" name="iT_InventoryTransfer_DocumentDate">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Base DocNum</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="iT_InventoryTransfer_BaseDocNum" name="iT_InventoryTransfer_BaseDocNum" readonly>
                                                </div>
                                            </div>
                                        </div>

                                    </div><!--row end-->
                  
                    <!-- form end -->


                                    <!-- table start -->

                                                 <div class="table-responsive" id="list">
                                                    <table id="tblItemRecord" class="table sample-table-responsive table-bordered" style="">
                                                        <thead class="fixedHeader1">
                                                            <tr>
                                                                <!-- <th>select</th> -->
                                                                <th>Sr. No </th>  
                                                                <th>Item Code</th>
                                                                <th>Item Name</th>
                                                                <th>Quality</th>
                                                                <th>From Whs</th>
                                                                <th>To Whs</th>
                                                                <th>Location</th>
                                                                <th>UOM</th>
                                                            </tr>
                                                        </thead>
                                                     <tbody id="InventoryTransferItemAppend_retails"></tbody> 
                                                   </table>
                                               </div>
                                <!-- table end -->
                                 <!-- table start -->
                                              <h5 class="modal-title" id="myLargeModalLabel">Container Selection</h5>
                                                <div class="table-responsive mt-2" id="list">
                                                    <table id="tblItemRecord" class="table sample-table-responsive table-bordered" style="">
                                                        <thead class="fixedHeader1">
                                                            <tr>
                                                                <th>Select</th>
                                                                <th>Item Code</th>
                                                                <th>Item Name</th>
                                                                <th>Container No</th>
                                                                <th>Batch</th>
                                                                <th>Batch Qty</th>
                                                                <th>Select Qty</th>
                                                                <th>Mfg Date</th> 
                                                                <th>Expiry Date</th>
                                                            </tr>
                                                        </thead>
                                                     <tbody id="ContainerSelectionItemAppend_retails"></tbody> 
                                                   </table>
                                               </div>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="button" onclick="SubmitInventoryTransfer_retails_issue()">Add</button>
                                    <button type="button" class="btn active btn-primary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                              </form>    
       </div><!--body end-->
    </div>
  </div>
</div>


<!-- ------------------------------------------------------------------------------------ -->
<!-- -------------------------------------------------------------------------------- -->



   <!--start sample collection Finished Goods model-->
  <div class="modal fade goods_issue_sample_issue" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Goods Issue555</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <!-- form start -->
                            <form role="form" class="form-horizontal" id="inventory_transfer_form_issue_sample_gI" method="post">
                                <input type="text" name="sample_issue_BPLId" id="sample_issue_BPLId" class="form-control ">
                                <input type="text" name="sample_issue_DocEntry" id="sample_issue_DocEntry" class="form-control ">


                                     <div class="row">

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Branch</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="sample_issue_branch" name="sample_issue_branch" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Base DocType</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="sample_issue_BaseDocType" name="sample_issue_BaseDocType" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Base Doc Num</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="sample_issue_BaseDocNum" name="sample_issue_BaseDocNum" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Series</label>
                                                 <!-- <div class="col-lg-8"> -->
                                                    <div class="col-lg-4">
                                                     <input class="form-control desabled" readonly type="number" id="sample_issue_DocNo" name="sample_issue_DocNo">
                                                   <!--  <select class="form-select desabled" id="fg_DocNo" name="fg_DocNo">
                                                        <option></option>
                                                    </select> -->
                                                </div>
                                                 <div class="col-lg-4">
                                                    <select class="form-control desabled" readonly type="text" id="sample_issue_DocName" name="sample_issue_DocName"></select>
                                                </div>
                                                    <!-- <input class="form-control desabled" type="text" id="sample_issue_Series" name="sample_issue_Series" readonly> -->
                                                <!-- </div> -->
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Posting Date</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control" type="date" id="sample_issue_PostingDate" name="sample_issue_PostingDate">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Document Date</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control" type="date" id="sample_issue_DocumentDate" name="sample_issue_DocumentDate">
                                                </div>
                                            </div>
                                        </div>

                                    </div><!--row end-->
                          
                    <!-- form end -->


                                    <!-- table start -->

                                    <div class="table-responsive" id="list">
                                                    <table id="tblItemRecord" class="table sample-table-responsive table-bordered" style="">
                                                        <thead class="fixedHeader1">
                                                            <tr>
                                                                <!-- <th>select</th> -->
                                                                <th>Sr. No </th>  
                                                                <th>Item Code</th>
                                                                <th>Item Name</th>
                                                                <th>Quality</th>
                                                                <th>Warehouse</th>
                                                                <th>ToWhs</th>
                                                                <th>Location</th>
                                                                <th>UOM</th>
                                                            </tr>
                                                        </thead>
                                                     <tbody id="InventoryTransferItemAppend"></tbody> 
                                                   </table>
                                               </div>
                                          <!-- table end -->
                                            <br>

                                 <!-- table start -->
                                 <h5 class="modal-title" id="myLargeModalLabel">Container Selection</h5>
                                 <div class="table-responsive mt-2" id="list">
                                                    <table id="tblItemRecord" class="table sample-table-responsive table-bordered" style="">
                                                        <thead class="fixedHeader1">
                                                            <tr>
                                                                <th>Select</th>
                                                                <th>Item Code</th>
                                                                <th>Item Name</th>
                                                                <th>Container No</th>
                                                                <th>Batch</th>
                                                                <th>Batch Qty</th>
                                                                <th>Select Qty</th>
                                                                <th>Mfg Date</th> 
                                                                <th>Expiry Date</th>
                                                            </tr>
                                                        </thead>
                                                     <tbody id="ContainerSelectionItemAppend"></tbody> 
                                                   </table>
                                               </div>
                                               <!-- <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Add</button> -->
                                               <button type="button" class="btn btn-primary" data-bs-toggle="button" onclick="SubmitInventoryTransfer_sample_issue()">Add</button>

                                               <button type="button" data-bs-dismiss="modal" aria-label="Close"  class="btn active btn-primary" data-bs-toggle="button" autocomplete="off">Cancel</button>
                                
                        </form>


                </div><!--body end-->
    </div>
  </div>
</div>



   <!-- ---------------------------------------------------------------------------------------------------
   ---------------------------------------------------------------------------------------------------
   --------------------------------------------------------------------------------------------------- -->

        <div class="modal fade sample-collection-finished-goods" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Sample Collection - Finished goods </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="OTSCP_Form" method="post">

                         <input type="text" name="SC_finished_good_LineNo" id="SC_finished_good_LineNo" class="form-control ">
                         <input type="text" name="SC_finished_good_BPLId" id="SC_finished_good_BPLId" class="form-control ">
                         <input type="text" name="SC_finished_good_LocCode" id="SC_finished_good_LocCode" class="form-control ">
                         
                         <input type="text" name="SC_finished_good_Unit" id="SC_finished_good_Unit" class="form-control ">
                         <input type="text" name="SC_finished_good_BatchQty" id="SC_finished_good_BatchQty" class="form-control ">

                         <input type="text" name="SC_finished_good_UnderTransferNo" id="SC_finished_good_UnderTransferNo" class="form-control ">

                         <input type="text" name="SC_finished_good_Dateofreversal" id="SC_finished_good_Dateofreversal" class="form-control ">
                         
                         <input type="text" name="SC_finished_good_RetainQty" id="SC_finished_good_RetainQty" class="form-control ">

                         <input type="text" name="SC_finished_good_RetainQtyUOM" id="SC_finished_good_RetainQtyUOM" class="form-control ">

                         <input type="text" name="SC_finished_good_Cont1" id="SC_finished_good_Cont1" class="form-control ">
                         <input type="text" name="SC_finished_good_Cont2" id="SC_finished_good_Cont2" class="form-control ">
                         <input type="text" name="SC_finished_good_Cont3" id="SC_finished_good_Cont3" class="form-control ">

                         <input type="text" name="SC_finished_good_QtyforLabel" id="SC_finished_good_QtyforLabel" class="form-control ">
                         

                    
                        <div class="row">

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Ingediant Type</label>
                                                <div class="col-lg-8">
                                                    <select class="form-select" id="SC_IngredientsType" name="SC_IngredientsType">
                                                        <!-- <option>None</option> -->
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Receipt No</label>
                                                <div class="col-lg-4">
                                                    <input class="form-control desabled" type="number" id="SC_finished_good_RFPNo" name="SC_finished_good_RFPNo" readonly>
                                                </div>
                                                 <div class="col-lg-4">
                                                    <input class="form-control desabled" type="number" id="SC_finished_good_RFPODocEntry" name="SC_finished_good_RFPODocEntry" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">WO No</label>
                                                <div class="col-lg-4">
                                                    <input class="form-control desabled" type="number" id="SC_finished_good_WONo" name="SC_finished_good_WONo" readonly>
                                                </div>
                                                 <div class="col-lg-4">
                                                    <input class="form-control desabled" type="text" id="SC_finished_good_WOEntry" name="SC_finished_good_WOEntry" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Doc No</label>
                                                <div class="col-lg-4">
                                                    <select class="form-select" id="SC_finished_good_DocName" name="SC_finished_good_DocName">
                                                    </select>
                                                </div>
                                                 <div class="col-lg-4">
                                                    <input class="form-control desabled" type="number" id="SC_finished_good_DocNo" name="SC_finished_good_DocNo" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Location</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="SC_finished_good_Location" name="SC_finished_good_Location" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Intimated By</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="SC_finished_good_IntimatedBy" name="SC_finished_good_IntimatedBy" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Intimated Date</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" type="date" id="SC_finished_good_IntimatedDate" name="SC_finished_good_IntimatedDate">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Sample Qty </label>
                                                <div class="col-lg-4">
                                                    <input class="form-control desabled" type="number" id="SC_finished_good_SampleQty" name="SC_finished_good_SampleQty" readonly>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input class="form-control desabled" type="text" id="SC_finished_good_SampleQtyUOM" name="SC_finished_good_SampleQtyUOM" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-5 col-form-label mt-6" for="val-skill">Sample Collect By</label>
                                                <div class="col-lg-7">
                                                    <select class="form-control"  id="SC_finished_good_SampleCollectBy" name="SC_finished_good_SampleCollectBy"></select>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">A/R No</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="SC_finished_good_ARNo" name="SC_finished_good_ARNo" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <!-- <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-6 col-form-label mt-6" for="val-skill">Sample Recieved Sepretly</label>
                                                <div class="col-lg-6">
                                                    <select class="form-select">
                                                        <option>Select</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div> -->

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">DocDate</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" type="date" id="SC_finished_good_DocDate" name="SC_finished_good_DocDate">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">TR No</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="SC_finished_good_TRNo" name="SC_finished_good_TRNo" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Branch</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="SC_finished_good_Branch" name="SC_finished_good_Branch" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Item Code</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="SC_finished_good_ItemCode" name="SC_finished_good_ItemCode" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Item Name</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="SC_finished_good_ItemName" name="SC_finished_good_ItemName" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Batch No</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="SC_finished_good_BatchNo" name="SC_finished_good_BatchNo" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">No.Of Container</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" type="text" id="SC_finished_good_NoOfContainer" name="SC_finished_good_NoOfContainer">
                                                </div>
                                            </div>
                                        </div>

                                       <!--  <div class="d-flex flex-wrap gap-2">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Container Selection</button>
                                        </div> -->
                                       
                                    </div>

                                    <br><br>    
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">                                
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">

                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#samp_detailss" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">Sample Collection Details</span>    
                                                </a>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#homes" role="tab" disabled>
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">External Issue</span>    
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profilety" role="tab" disabled>
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">Extra Issue</span>    
                                                </a>
                                            </li>
                                        </ul>
        
                                        <!-- Tab panes -->

                                        <div class="tab-content p-3 text-muted">
                                            <div class="tab-pane active" id="samp_detailss" role="tabpanel">
                                                <!-- form start -->
                                               <form>
                                                     <div class="row">

                                                        <div class="col-xl-3 col-md-6">
                                                            <div class="form-group row mb-2">
                                                                <label class="col-lg-6 col-form-label mt-6" for="val-skill">UnderTest Transfer No</label>
                                                                <div class="col-lg-6">
                                                                    <input type="text" name="" class="form-control desabled" readonly>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-3 col-md-6">
                                                            <div class="form-group row mb-2">
                                                                <div class="col-md-5">
                                                                <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off" disabled>Sample Issue</button>
                                                                </div>
                                                                <div class="col-lg-7">
                                                                    <input type="text" name="" class="form-control desabled" readonly>
                                                                </div>
                                                            </div>
                                                        </div>

                                                          <div class="col-xl-3 col-md-6">
                                                            <div class="form-group row mb-2">
                                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Date of Reversal</label>
                                                                <div class="col-lg-8 container_input">
                                                                    <input type="text" name="" class="form-control desabled" readonly>
                                                                 </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-3 col-md-6">
                                                            <div class="form-group row mb-2">
                                                                <div class="col-md-7">
                                                                    <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off" disabled>Reverse Sample Issue</button>
                                                                </div>
                                                                <div class="col-lg-5 container_input">
                                                                    <input type="text" name="" class="form-control desabled" readonly>
                                                                 </div>
                                                            </div>
                                                        </div>

                                                     </div>

                                                     <div class="row">

                                                        <div class="col-xl-3 col-md-6">
                                                            <div class="form-group row mb-2">
                                                                <label class="col-lg-6 col-form-label mt-6" for="val-skill">Retain Qty</label>
                                                                <div class="col-lg-3">
                                                                    <input type="text" name="" class="form-control desabled" readonly>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <input type="text" name="" class="form-control desabled" readonly>
                                                                </div>
                                                            </div>
                                                        </div>

                                                         <div class="col-xl-3 col-md-6">
                                                            <div class="form-group row mb-2">
                                                                <div class="col-md-4">
                                                                    <button type="button" class="pad_btn btn btn-primary" data-bs-toggle="button" autocomplete="off" disabled style="padding: 7px 5px 7px 5px;">Retain Issue</button>
                                                                </div>
                                                                <div class="col-lg-8 container_input">
                                                                    <input type="text" name="" class="form-control desabled" readonly>
                                                                 </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-3 col-md-6">
                                                            <div class="form-group row mb-2">
                                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Container No</label>
                                                                <div class="col-lg-8 container_input" style="display: inline-flex;">
                                                                    <input type="text" name="" class="form-control desabled" readonly>
                                                                    <input type="text" name="" class="form-control desabled" readonly>
                                                                    <input type="text" name="" class="form-control desabled" readonly>
                                                                 </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-3 col-md-6">
                                                            <div class="form-group row mb-2">
                                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Qty For Label</label>
                                                                <div class="col-lg-8">
                                                                    <input type="text" name="" class="form-control desabled" readonly>
                                                                </div>
                                                            </div>
                                                        </div>

                                                     </div>

                                                     
                                                </form>        
                                                <!-- form end -->
                                                <div class="d-flex flex-wrap gap-2">
                                                    <!-- Toggle States Button -->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off" disabled>Sample for Analysis Label</button>

                                                    <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off" disabled>Sample Label</button>

                                                </div>
                                            </div>

                                            <div class="tab-pane" id="homes" role="tabpanel">
                                                    <div class="table-responsive" id="list">
                                                    <table id="tblItemRecord" class="table sample-table-responsive table-bordered" style="">
                                                            <thead class="fixedHeader1">
                                                                <tr>
                                                                    <th>Sr. No</th>
                                                                    <th>Supplier Code</th>
                                                                    <th>Supplier Name</th>
                                                                    <th>UOM </th>  
                                                                    <th>Sample Date</th>
                                                                    <th>Warehouse</th>
                                                                    <th>Sample Quantity</th>
                                                                    <th>Inventory Transfer</th> 
                                                                </tr>
                                                            </thead>
                                                         <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td class="desabled"><input class="border_hide desabled" type="text" id="" name="" class="form-control"></td>
                                                                <td></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td class="desabled"><input class="border_hide desabled" type="text" id="" name="" class="form-control"></td>
                                                             </tr>

                                                             <tr>
                                                                <td></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td class="desabled"><input class="border_hide desabled" type="text" id="" name="" class="form-control"></td>
                                                                <td></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td class="desabled"><input class="border_hide desabled" type="text" id="" name="" class="form-control"></td>
                                                             </tr>

                                                             <tr>
                                                                <td></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td class="desabled"><input class="border_hide desabled" type="text" id="" name="" class="form-control"></td>
                                                                <td></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td class="desabled"><input class="border_hide desabled" type="text" id="" name="" class="form-control"></td>
                                                             </tr>
                                                           </tbody> 

                                                       </table>
                                                   </div> 
                                                   <div class="d-flex flex-wrap gap-2">
                                                        <!-- Toggle States Button -->
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Transfer</button>

                                                         <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Issue Sleep</button>
                                                    </div>
                                            </div>
                                            <div class="tab-pane" id="profilety" role="tabpanel">
                                                <div class="table-responsive" id="list">
                                                    <table id="tblItemRecord" class="table sample-table-responsive table-bordered" style="">
                                                          <thead class="fixedHeader1">
                                                                <tr>
                                                                    <th>Sr. No</th>
                                                                    <th>Sample Quantity</th>
                                                                    <th>UOM</th>
                                                                    <th>Warehouse</th>
                                                                    <th>Sample By</th>  
                                                                    <th>Issue Date</th>
                                                                    <th>Post Extra Issue</th>
                                                                </tr>
                                                            </thead>
                                                         <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td class="desabled"><input class="border_hide desabled" type="text" id="" name="" class="form-control"></td>
                                                             </tr>

                                                             <tr>
                                                                <td></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td class="desabled"><input class="border_hide desabled" type="text" id="" name="" class="form-control"></td>
                                                             </tr>

                                                             <tr>
                                                                <td></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td><input class="border_hide" type="text" id="" name="" class="form-control"></td>
                                                                <td class="desabled"><input class="border_hide desabled" type="text" id="" name="" class="form-control"></td>
                                                             </tr>
                                                           </tbody> 

                                                       </table>
                                               </div> 
                                                <div class="d-flex flex-wrap gap-2">
                                                            <!-- Toggle States Button -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Post Extra Issue</button>

                                                             <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Issue Slip</button>

                                                        </div>
                                            </div>
                                            
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="d-flex flex-wrap gap-2 mt-2">
                                <!-- Toggle States Button -->
                                <!-- <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Add</button> -->
                                <button type="button" class="btn btn-primary active" data-bs-toggle="button" autocomplete="off" id="samplecollectFinishedGood_Btn" name="samplecollectFinishedGood_Btn" onclick="OTSCP_Submit();">Add</button>

                                 <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn btn-primary active">Cancel</button>

                            </div>
                        </div><!--row-->   
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    </div>

     <!--end sample collection model-->

      <!-- --------inventory transfer------------ -->

<div class="modal fade inventory_transfer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Inventory Transfer </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <!-- form start -->
                 <form>
                                     <div class="row">

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Supplier Code</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="" name="" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Series</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="" name="" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Supplier Name</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="" name="" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Branch</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="" name="" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Base DocType</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="" name="" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Posting Date</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control" type="date" id="" name="">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Document Date</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control" type="date" id="" name="">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Base DocNum</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="" name="" readonly>
                                                </div>
                                            </div>
                                        </div>

                                    </div><!--row end-->
                    </form>
                    <!-- form end -->


                                    <!-- table start -->

                                    <div class="table-responsive" id="list">
                                                    <table id="tblItemRecord" class="table sample-table-responsive table-bordered" style="">
                                                        <thead class="fixedHeader1">
                                                            <tr>
                                                                <th>select</th>
                                                                <th>Sr. No </th>  
                                                                <th>Item Code</th>
                                                                <th>Item Name</th>
                                                                <th>Quality</th>
                                                                <th>From Whs</th>
                                                                <th>To Whs</th>
                                                                <th>From Bin</th>
                                                                <th>To Bin</th> 
                                                                <th>Location</th>
                                                                <th>UOM</th>
                                                            </tr>
                                                        </thead>
                                                     <tbody>
                                                        <tr>
                                                             <td style="text-align: center;">
                                                                 <input class="form-check-input" type="radio" value="" id="flexCheckDefault" style="width: 17px;height: 17px;">
                                                            </td>
                                                            <td>1</td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td class="desabled"></td>
                                                            <td class="desabled"></td>
                                                         </tr>

                                                          <tr>
                                                            <td style="text-align: center;">
                                                                 <input class="form-check-input" type="radio" value="" id="flexCheckDefault" style="width: 17px;height: 17px;">
                                                            </td>
                                                            <td>1</td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td class="desabled"></td>
                                                            <td class="desabled"></td>
                                                         </tr>

                                                          <tr>
                                                           <td style="text-align: center;">
                                                                 <input class="form-check-input" type="radio" value="" id="flexCheckDefault" style="width: 17px;height: 17px;">
                                                            </td>
                                                            <td>1</td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td class="desabled"></td>
                                                            <td class="desabled"></td>
                                                         </tr>

                                                         
                                                     </tbody> 
                                                   </table>
                                               </div>
                                <!-- table end -->
                                 <!-- table start -->
                   <h5 class="modal-title" id="myLargeModalLabel">Container Selection</h5>
                    <div class="table-responsive mt-2" id="list">
                                                    <table id="tblItemRecord" class="table sample-table-responsive table-bordered" style="">
                                                        <thead class="fixedHeader1">
                                                            <tr>
                                                                <th>Select</th>
                                                                <th>Item Code</th>
                                                                <th>Item Name</th>
                                                                <th>Container No</th>
                                                                <th>Batch</th>
                                                                <th>Batch Qty</th>
                                                                <th>Select Qty</th>
                                                                <th>Mfg Date</th> 
                                                                <th>Expiry Date</th>
                                                            </tr>
                                                        </thead>
                                                     <tbody>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="width: 17px;height: 17px;">
                                                            </td>
                                                            <td class="desabled">R00010</td>
                                                            <td class="desabled">CITARIO ITEM</td>
                                                            <td class="desabled">CENTRAL/1/20068778</td>
                                                            <td class="desabled">879999</td>
                                                            <td class="desabled">25</td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td class="desabled"></td>
                                                            <td class="desabled"></td>
                                                         </tr>

                                                         <tr>
                                                            <td style="text-align: center;">
                                                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="width: 17px;height: 17px;">
                                                            </td>
                                                            <td class="desabled">R00010</td>
                                                            <td class="desabled">CITARIO ITEM</td>
                                                            <td class="desabled">CENTRAL/1/20068778</td>
                                                            <td class="desabled">879999</td>
                                                            <td class="desabled">25</td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td class="desabled"></td>
                                                            <td class="desabled"></td>
                                                         </tr>

                                                         <tr>
                                                            <td style="text-align: center;">
                                                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="width: 17px;height: 17px;">
                                                            </td>
                                                            <td class="desabled">R00010</td>
                                                            <td class="desabled">CITARIO ITEM</td>
                                                            <td class="desabled">CENTRAL/1/20068778</td>
                                                            <td class="desabled">879999</td>
                                                            <td class="desabled">25</td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td class="desabled"></td>
                                                            <td class="desabled"></td>
                                                         </tr>

                                                          <tr>
                                                            <td colspan="6"></td>
                                                            <td class="desabled">788</td>
                                                            <td colspan="2"></td>
                                                         </tr>
                                           
                                           
                                                         
                                                     </tbody> 
                                                   </table>
                                               </div>
                                               <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Add</button>
                                               <button type="button" class="btn active btn-primary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                
      </div><!--body end-->
    </div>
  </div>
</div>



    <!-- --------------inventory transfer-------------- -->



      <!-- --------Goods Issue------------ -->

<div class="modal fade goods_issue" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Goods Issue4444</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <!-- form start -->
                 <form>
                                     <div class="row">

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Branch</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="" name="" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Base DocType</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="" name="" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Base Doc Num</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="" name="" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Series</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="" name="" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Posting Date</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control" type="date" id="" name="">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Document Date</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control" type="date" id="" name="">
                                                </div>
                                            </div>
                                        </div>

                                    </div><!--row end-->
                    </form>
                    <!-- form end -->


                                    <!-- table start -->

                                    <div class="table-responsive" id="list">
                                                    <table id="tblItemRecord" class="table sample-table-responsive table-bordered" style="">
                                                        <thead class="fixedHeader1">
                                                            <tr>
                                                                <th>select</th>
                                                                <th>Sr. No </th>  
                                                                <th>Item Code</th>
                                                                <th>Item Name</th>
                                                                <th>Quality</th>
                                                                <th>Warehouse</th>
                                                                <th>Item Cost</th>
                                                                <th>To Bin</th> 
                                                                <th>Location</th>
                                                                <th>UOM</th>
                                                            </tr>
                                                        </thead>
                                                     <tbody>
                                                        <tr>
                                                             <td style="text-align: center;">
                                                                 <input class="form-check-input" type="radio" value="" id="flexCheckDefault" style="width: 17px;height: 17px;">
                                                            </td>
                                                            <td>1</td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td class="desabled"></td>
                                                            <td class="desabled"></td>
                                                         </tr>

                                                          <tr>
                                                             <td style="text-align: center;">
                                                                 <input class="form-check-input" type="radio" value="" id="flexCheckDefault" style="width: 17px;height: 17px;">
                                                            </td>
                                                            <td>1</td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td class="desabled"></td>
                                                            <td class="desabled"></td>
                                                         </tr>

                                                         <tr>
                                                             <td style="text-align: center;">
                                                                 <input class="form-check-input" type="radio" value="" id="flexCheckDefault" style="width: 17px;height: 17px;">
                                                            </td>
                                                            <td>1</td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td class="desabled"></td>
                                                            <td class="desabled"></td>
                                                         </tr>
                                           
                                                         
                                                     </tbody> 
                                                   </table>
                                               </div>
                                               
                                <!-- table end -->

                                <br>

                                 <!-- table start -->
                                 <h5 class="modal-title" id="myLargeModalLabel">Container Selection</h5>
                       <div class="table-responsive mt-2" id="list">
                                                    <table id="tblItemRecord" class="table sample-table-responsive table-bordered" style="">
                                                        <thead class="fixedHeader1">
                                                            <tr>
                                                                <th>Select</th>
                                                                <th>Item Code</th>
                                                                <th>Item Name</th>
                                                                <th>Container No</th>
                                                                <th>Batch</th>
                                                                <th>Batch Qty</th>
                                                                <th>Select Qty</th>
                                                                <th>Mfg Date</th> 
                                                                <th>Expiry Date</th>
                                                            </tr>
                                                        </thead>
                                                     <tbody>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="width: 17px;height: 17px;">
                                                            </td>
                                                            <td class="desabled">R00010</td>
                                                            <td class="desabled">CITARIO ITEM</td>
                                                            <td class="desabled">CENTRAL/1/20068778</td>
                                                            <td class="desabled">879999</td>
                                                            <td class="desabled">25</td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td class="desabled"></td>
                                                            <td class="desabled"></td>
                                                         </tr>

                                                         <tr>
                                                            <td style="text-align: center;">
                                                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="width: 17px;height: 17px;">
                                                            </td>
                                                            <td class="desabled">R00010</td>
                                                            <td class="desabled">CITARIO ITEM</td>
                                                            <td class="desabled">CENTRAL/1/20068778</td>
                                                            <td class="desabled">879999</td>
                                                            <td class="desabled">25</td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td class="desabled"></td>
                                                            <td class="desabled"></td>
                                                         </tr>

                                                         <tr>
                                                            <td style="text-align: center;">
                                                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="width: 17px;height: 17px;">
                                                            </td>
                                                            <td class="desabled">R00010</td>
                                                            <td class="desabled">CITARIO ITEM</td>
                                                            <td class="desabled">CENTRAL/1/20068778</td>
                                                            <td class="desabled">879999</td>
                                                            <td class="desabled">25</td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td class="desabled"></td>
                                                            <td class="desabled"></td>
                                                         </tr>
                                                         <tr>
                                                            <td colspan="6"></td>
                                                            <td class="desabled">788</td>
                                                            <td colspan="2"></td>
                                                         </tr>
                                           
                                                         
                                                     </tbody> 
                                                   </table>
                                               </div>
                                               <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Add</button>
                                               <button type="button" data-bs-dismiss="modal" aria-label="Close"  class="btn active btn-primary" data-bs-toggle="button" autocomplete="off">Cancel</button>
                                



                </div><!--body end-->
    </div>
  </div>
</div>


    <!-- --------------Goods Issue-------------- -->



        <script type="text/javascript">
(function ($) {

  $.fn.enableCellNavigation = function () {

    var arrow = {
      left: 37,
      up: 38,
      right: 39,
      down: 40
    };

    // select all on focus
    // works for input elements, and will put focus into
    // adjacent input or textarea. once in a textarea,
    // however, it will not attempt to break out because
    // that just seems too messy imho.
    this.find('input').keydown(function (e) {

      // shortcut for key other than arrow keys
      if ($.inArray(e.which, [arrow.left, arrow.up, arrow.right, arrow.down]) < 0) {
        return;
      }

      var input = e.target;
      var td = $(e.target).closest('td');
      var moveTo = null;

      switch (e.which) {

        case arrow.left:
          {
            if (input.selectionStart == 0) {
              moveTo = td.prev('td:has(input,textarea)');
            }
            break;
          }
        case arrow.right:
          {
            if (input.selectionEnd == input.value.length) {
              moveTo = td.next('td:has(input,textarea)');
            }
            break;
          }

        case arrow.up:
        case arrow.down:
          {

            var tr = td.closest('tr');
            var pos = td[0].cellIndex;

            var moveToRow = null;
            if (e.which == arrow.down) {
              moveToRow = tr.next('tr');
            } else if (e.which == arrow.up) {
              moveToRow = tr.prev('tr');
            }

            if (moveToRow.length) {
              moveTo = $(moveToRow[0].cells[pos]);
            }

            break;
          }

      }

      if (moveTo && moveTo.length) {

        e.preventDefault();

        moveTo.find('input,textarea').each(function (i, input) {
          input.focus();
          input.select();
        });

      }

    });

  };

})(jQuery);


// use the plugin
$(function () {
  $('#list').enableCellNavigation();
});


</script>
