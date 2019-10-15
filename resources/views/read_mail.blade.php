@extends('layout')
@section('content')
<style type="text/css">
    .email-menu-list a{
        color:#6c757d !important;
        text-decoration: none!important;
    }
    a{
        text-decoration: none!important;
    }
</style>
<div class="page-aside-left">

                                            <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#compose-modal" id="nee">Nouveau mail</button>

                                            <div class="email-menu-list mt-3">
                                                <a href="/mail" class="text-danger font-weight-bold"><i class="dripicons-inbox mr-2"></i>Réception<span class="badge badge-danger-lighten float-right ml-2">7</span></a>
                                                <!-- <a href="javascript: void(0);"><i class="dripicons-star mr-2"></i>Favoris</a> -->
                                                <!-- <a href="javascript: void(0);"><i class="dripicons-clock mr-2"></i>Snoozed</a> -->
                                                <!-- <a href="javascript: void(0);"><i class="dripicons-document mr-2"></i>Draft<span class="badge badge-info-lighten float-right ml-2">32</span></a> -->
                                                <a href="javascript: void(0);"><i class="dripicons-exit mr-2"></i>Envoyé</a>
                                                <!-- <a href="javascript: void(0);"><i class="dripicons-trash mr-2"></i>Trash</a> -->
                                                <!-- <a href="javascript: void(0);"><i class="dripicons-tag mr-2"></i>Important</a> -->
                                                <!-- <a href="javascript: void(0);"><i class="dripicons-warning mr-2"></i>Spam</a> -->
                                            </div>

                                            <div class="mt-4">
                                                <h6 class="text-uppercase">Projets</h6>
                                                <div class="email-menu-list labels-list mt-2">
                                                    <a href="javascript: void(0);"><i class="mdi mdi-circle font-13 text-info mr-2"></i>Centre commercial M.</a>
                                                    <a href="javascript: void(0);"><i class="mdi mdi-circle font-13 text-warning mr-2"></i>Enzo & Rosso</a>
                                                    <a href="javascript: void(0);"><i class="mdi mdi-circle font-13 text-success mr-2"></i>Teamber</a>
                                                </div>
                                            </div>

                                            <div class="mt-5">
                                                <!-- <h4><span class="badge badge-pill p-1 px-2 badge-secondary-lighten">FREE</span></h4> -->
                                                <h6 class="text-uppercase mt-3">Stockage</h6>
                                                <div class="progress my-2 progress-sm">
                                                    <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 46%" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <p class="text-muted font-13 mb-0">7.02 GB (46%) of 15 GB uutilisé</p>
                                            </div>

                                        </div>
<div class="page-aside-right">

                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary"><i class="mdi mdi-archive font-16"></i></button>
                                                <button type="button" class="btn btn-secondary"><i class="mdi mdi-alert-octagon font-16"></i></button>
                                                <button type="button" class="btn btn-secondary"><i class="mdi mdi-delete-variant font-16"></i></button>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-folder font-16"></i>
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <span class="dropdown-header">Move to:</span>
                                                    <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-label font-16"></i>
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <span class="dropdown-header">Label as:</span>
                                                    <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                                </div>
                                            </div>

                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal font-16"></i> Plus
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <span class="dropdown-header">More Options :</span>
                                                    <a class="dropdown-item" href="javascript: void(0);">Mark as Unread</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Add to Tasks</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Add Star</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Mute</a>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <div class="mt-3">
                                                <h5 class="font-18"><?php echo $messages->getSubject(); ?></h5>

                                                <hr>

                                                <div class="media mb-3 mt-1">
                                                    <img class="d-flex mr-2 rounded-circle" src="{{ asset('images/users/avatar-2.jpg') }}" alt="placeholder image" height="32">
                                                    <div class="media-body">
                                                        <small class="float-right"><?php echo $messages->getReceivedDateTime()->format('j/m/Y') ?></small>
                                                        <h6 class="m-0 font-14"><?php echo($messages->getFrom()->getEmailAddress()->getName()); ?></h6>
                                                        <small class="text-muted">De: <?php echo($messages->getFrom()->getEmailAddress()->getAddress()); ?></small>
                                                    </div>
                                                </div>

                                                <?php echo($messages->getBody()->getContent()); ?>
                                                <hr>

                                                <?php if($messages->getHasAttachments()!=false){?>
                                                <h5 class="mb-3">Pièce(s) jointe(s)</h5>
                                                <div class="row">
                                                    <?php foreach ($attach as $key => $value) {                   ?>
                                                    <div class="col-xl-4">
                                                        <div class="card mb-1 shadow-none border">
                                                            <div class="p-2">
                                                                <div class="row align-items-center">
                                                                    <div class="col-auto">
                                                                        <div class="avatar-sm">
                                                                            <span class="avatar-title bg-primary-lighten text-primary rounded">
                                                                                <?php echo explode(".",$value->getName())[1];?>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col pl-0">
                                                                        <a href="../<?php echo ($value->getContentLocation());?><?php echo ($value->getName());?>" class="text-muted font-weight-bold" download><?php echo ($value->getContentLocation());?><?php echo ($value->getName());?></a>
                                                                        <p class="mb-0">2.3 MB</p>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <!-- Button -->
                                                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                                            <i class="dripicons-download"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> <!-- end col -->
                                                <?php } ?>
                                                </div>
                                                <!-- end row-->
                                                <?php } ?>
                                                <div class="mt-5">
                                                    <a href="" class="btn btn-secondary mr-2" style="color:white;text-decoration:none;"><i class="mdi mdi-reply mr-1"></i> Repondre</a>
                                                    <a href="" class="btn btn-light" style="color:black;text-decoration:none;">Transférer <i class="mdi mdi-forward ml-1"></i></a>
                                                </div>
     
                                            </div>
                                            </div>
                                            <!-- end .mt-4 -->

                                            <!-- end row-->
                                        </div>


@endsection