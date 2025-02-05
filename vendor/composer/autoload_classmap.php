<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'ASDevice' => $baseDir . '/lib/core/asdevice.php',
    'AuthenticationRequiredException' => $baseDir . '/lib/exceptions/authenticationrequiredexception.php',
    'BaseException' => $baseDir . '/mapi/class.baseexception.php',
    'BaseRecurrence' => $baseDir . '/mapi/class.baserecurrence.php',
    'BodyPartPreference' => $baseDir . '/lib/core/bodypartpreference.php',
    'BodyPreference' => $baseDir . '/lib/core/bodypreference.php',
    'ChangesMemoryWrapper' => $baseDir . '/lib/core/changesmemorywrapper.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'ContentParameters' => $baseDir . '/lib/core/contentparameters.php',
    'DeviceManager' => $baseDir . '/lib/core/devicemanager.php',
    'ExportChangesICS' => $baseDir . '/lib/grommunio/exporter.php',
    'FatalException' => $baseDir . '/lib/exceptions/fatalexception.php',
    'FatalMisconfigurationException' => $baseDir . '/lib/exceptions/fatalmisconfigurationexception.php',
    'FatalNotImplementedException' => $baseDir . '/lib/exceptions/fatalnotimplementedexception.php',
    'FileLog' => $baseDir . '/lib/log/filelog.php',
    'FolderChange' => $baseDir . '/lib/request/folderchange.php',
    'FolderSync' => $baseDir . '/lib/request/foldersync.php',
    'FreeBusyPublish' => $baseDir . '/mapi/class.freebusypublish.php',
    'GSync' => $baseDir . '/lib/core/gsync.php',
    'GSyncException' => $baseDir . '/lib/exceptions/gsyncexception.php',
    'GetAttachment' => $baseDir . '/lib/request/getattachment.php',
    'GetHierarchy' => $baseDir . '/lib/request/gethierarchy.php',
    'GetItemEstimate' => $baseDir . '/lib/request/getitemestimate.php',
    'Grommunio' => $baseDir . '/lib/grommunio/grommunio.php',
    'HTTPReturnCodeException' => $baseDir . '/lib/exceptions/httpreturncodeexception.php',
    'HierarchyCache' => $baseDir . '/lib/core/hierarchycache.php',
    'IBackend' => $baseDir . '/lib/interface/ibackend.php',
    'IChanges' => $baseDir . '/lib/interface/ichanges.php',
    'IExportChanges' => $baseDir . '/lib/interface/iexportchanges.php',
    'IImportChanges' => $baseDir . '/lib/interface/iimportchanges.php',
    'IIpcProvider' => $baseDir . '/lib/interface/iipcprovider.php',
    'ISearchProvider' => $baseDir . '/lib/interface/isearchprovider.php',
    'IStateMachine' => $baseDir . '/lib/interface/istatemachine.php',
    'ImportChangesICS' => $baseDir . '/lib/grommunio/importer.php',
    'ImportChangesStream' => $baseDir . '/lib/core/streamimporter.php',
    'InterProcessData' => $baseDir . '/lib/core/interprocessdata.php',
    'ItemOperations' => $baseDir . '/lib/request/itemoperations.php',
    'Log' => $baseDir . '/lib/log/log.php',
    'LoopDetection' => $baseDir . '/lib/core/loopdetection.php',
    'MAPIException' => $baseDir . '/mapi/class.mapiexception.php',
    'MAPIMapping' => $baseDir . '/lib/grommunio/mapimapping.php',
    'MAPIProvider' => $baseDir . '/lib/grommunio/mapiprovider.php',
    'MAPIStreamWrapper' => $baseDir . '/lib/grommunio/mapistreamwrapper.php',
    'MAPIUtils' => $baseDir . '/lib/grommunio/mapiutils.php',
    'Mail_RFC822' => $baseDir . '/lib/utils/g_RFC822.php',
    'MeetingResponse' => $baseDir . '/lib/request/meetingresponse.php',
    'Meetingrequest' => $baseDir . '/mapi/class.meetingrequest.php',
    'MoveItems' => $baseDir . '/lib/request/moveitems.php',
    'NoHierarchyCacheAvailableException' => $baseDir . '/lib/exceptions/nohierarchycacheavailableexception.php',
    'NoPostRequestException' => $baseDir . '/lib/exceptions/nopostrequestexception.php',
    'NotImplementedException' => $baseDir . '/lib/exceptions/notimplementedexception.php',
    'Notify' => $baseDir . '/lib/request/notify.php',
    'PHPWrapper' => $baseDir . '/lib/grommunio/mapiphpwrapper.php',
    'Ping' => $baseDir . '/lib/request/ping.php',
    'PingTracking' => $baseDir . '/lib/core/pingtracking.php',
    'Provisioning' => $baseDir . '/lib/request/provisioning.php',
    'ProvisioningManager' => $baseDir . '/lib/core/provisioningmanager.php',
    'ProvisioningRequiredException' => $baseDir . '/lib/exceptions/provisioningrequiredexception.php',
    'Recurrence' => $baseDir . '/mapi/class.recurrence.php',
    'RedisConnection' => $baseDir . '/lib/core/redisconnection.php',
    'ReplaceNullcharFilter' => $baseDir . '/lib/wbxml/replacenullcharfilter.php',
    'Request' => $baseDir . '/lib/request/request.php',
    'RequestProcessor' => $baseDir . '/lib/request/requestprocessor.php',
    'ResolveRecipients' => $baseDir . '/lib/request/resolverecipients.php',
    'SLog' => $baseDir . '/lib/core/slog.php',
    'Search' => $baseDir . '/lib/request/search.php',
    'SendMail' => $baseDir . '/lib/request/sendmail.php',
    'ServiceUnavailableException' => $baseDir . '/lib/exceptions/serviceunavailableexception.php',
    'Settings' => $baseDir . '/lib/request/settings.php',
    'StateInvalidException' => $baseDir . '/lib/exceptions/stateinvalidexception.php',
    'StateManager' => $baseDir . '/lib/core/statemanager.php',
    'StateNotFoundException' => $baseDir . '/lib/exceptions/statenotfoundexception.php',
    'StateNotYetAvailableException' => $baseDir . '/lib/exceptions/statenotyetavailableexception.php',
    'StateObject' => $baseDir . '/lib/core/stateobject.php',
    'StatusException' => $baseDir . '/lib/exceptions/statusexception.php',
    'Streamer' => $baseDir . '/lib/core/streamer.php',
    'StringStreamWrapper' => $baseDir . '/lib/utils/stringstreamwrapper.php',
    'Sync' => $baseDir . '/lib/request/sync.php',
    'SyncAccount' => $baseDir . '/lib/syncobjects/syncaccount.php',
    'SyncAppointment' => $baseDir . '/lib/syncobjects/syncappointment.php',
    'SyncAppointmentException' => $baseDir . '/lib/syncobjects/syncappointmentexception.php',
    'SyncAttachment' => $baseDir . '/lib/syncobjects/syncattachment.php',
    'SyncAttendee' => $baseDir . '/lib/syncobjects/syncattendee.php',
    'SyncBaseAttachment' => $baseDir . '/lib/syncobjects/syncbaseattachment.php',
    'SyncBaseBody' => $baseDir . '/lib/syncobjects/syncbasebody.php',
    'SyncBaseBodyPart' => $baseDir . '/lib/syncobjects/syncbasebodypart.php',
    'SyncCollections' => $baseDir . '/lib/core/synccollections.php',
    'SyncContact' => $baseDir . '/lib/syncobjects/synccontact.php',
    'SyncDeviceInformation' => $baseDir . '/lib/syncobjects/syncdeviceinformation.php',
    'SyncDevicePassword' => $baseDir . '/lib/syncobjects/syncdevicepassword.php',
    'SyncEmailAddresses' => $baseDir . '/lib/syncobjects/syncemailaddresses.php',
    'SyncFolder' => $baseDir . '/lib/syncobjects/syncfolder.php',
    'SyncItemOperationsAttachment' => $baseDir . '/lib/syncobjects/syncitemoperationsattachment.php',
    'SyncMail' => $baseDir . '/lib/syncobjects/syncmail.php',
    'SyncMailFlags' => $baseDir . '/lib/syncobjects/syncmailflags.php',
    'SyncMeetingRequest' => $baseDir . '/lib/syncobjects/syncmeetingrequest.php',
    'SyncMeetingRequestRecurrence' => $baseDir . '/lib/syncobjects/syncmeetingrequestrecurrence.php',
    'SyncNote' => $baseDir . '/lib/syncobjects/syncnote.php',
    'SyncOOF' => $baseDir . '/lib/syncobjects/syncoof.php',
    'SyncOOFMessage' => $baseDir . '/lib/syncobjects/syncoofmessage.php',
    'SyncObject' => $baseDir . '/lib/syncobjects/syncobject.php',
    'SyncObjectBrokenException' => $baseDir . '/lib/exceptions/syncobjectbrokenexception.php',
    'SyncParameters' => $baseDir . '/lib/core/syncparameters.php',
    'SyncProvisioning' => $baseDir . '/lib/syncobjects/syncprovisioning.php',
    'SyncRecurrence' => $baseDir . '/lib/syncobjects/syncrecurrence.php',
    'SyncResolveRecipient' => $baseDir . '/lib/syncobjects/syncresolverecipient.php',
    'SyncResolveRecipients' => $baseDir . '/lib/syncobjects/syncresolverecipients.php',
    'SyncResolveRecipientsAvailability' => $baseDir . '/lib/syncobjects/syncresolverecipientsavailability.php',
    'SyncResolveRecipientsCertificates' => $baseDir . '/lib/syncobjects/syncresolverecipientscertificates.php',
    'SyncResolveRecipientsOptions' => $baseDir . '/lib/syncobjects/syncresolverecipientsoptions.php',
    'SyncResolveRecipientsPicture' => $baseDir . '/lib/syncobjects/syncresolverecipientspicture.php',
    'SyncResolveRecipientsResponse' => $baseDir . '/lib/syncobjects/syncresolverecipientsresponse.php',
    'SyncRightsManagementLicense' => $baseDir . '/lib/syncobjects/syncrightsmanagementlicense.php',
    'SyncRightsManagementTemplate' => $baseDir . '/lib/syncobjects/syncrightsmanagementtemplate.php',
    'SyncRightsManagementTemplates' => $baseDir . '/lib/syncobjects/syncrightsmanagementtemplates.php',
    'SyncSendMail' => $baseDir . '/lib/syncobjects/syncsendmail.php',
    'SyncSendMailSource' => $baseDir . '/lib/syncobjects/syncsendmailsource.php',
    'SyncTask' => $baseDir . '/lib/syncobjects/synctask.php',
    'SyncTaskRecurrence' => $baseDir . '/lib/syncobjects/synctaskrecurrence.php',
    'SyncUserInformation' => $baseDir . '/lib/syncobjects/syncuserinformation.php',
    'SyncValidateCert' => $baseDir . '/lib/syncobjects/syncvalidatecert.php',
    'Syslog' => $baseDir . '/lib/log/syslog.php',
    'TaskRecurrence' => $baseDir . '/mapi/class.taskrecurrence.php',
    'TaskRequest' => $baseDir . '/mapi/class.taskrequest.php',
    'TimezoneUtil' => $baseDir . '/lib/utils/timezoneutil.php',
    'TopCollector' => $baseDir . '/lib/core/topcollector.php',
    'UnavailableException' => $baseDir . '/lib/exceptions/unavailableexception.php',
    'UserStoreInfo' => $baseDir . '/lib/core/userstoreinfo.php',
    'Utils' => $baseDir . '/lib/utils/utils.php',
    'ValidateCert' => $baseDir . '/lib/request/validatecert.php',
    'WBXMLDecoder' => $baseDir . '/lib/wbxml/wbxmldecoder.php',
    'WBXMLDefs' => $baseDir . '/lib/wbxml/wbxmldefs.php',
    'WBXMLEncoder' => $baseDir . '/lib/wbxml/wbxmlencoder.php',
    'WBXMLException' => $baseDir . '/lib/exceptions/wbxmlexception.php',
);
