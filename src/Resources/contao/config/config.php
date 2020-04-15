<?php

// Frontend modules
use Chuckki\UserBundle\Classes\ListReferencesModule;
use Chuckki\UserBundle\Model\UserDataModel;

$GLOBALS['FE_MOD']['miscellaneous']['referencesList'] = ListReferencesModule::class;

$GLOBALS['TL_MODELS']['tl_member_data'] = UserDataModel::class;
