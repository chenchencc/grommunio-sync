<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit153a56a781a72686b71399955d98204f
{
    public static $files = array (
        '158e247719544c05f5e89c414f630c24' => __DIR__ . '/../..' . '/version.php',
        '7e65a9fc8bb44d8c2fe16fa283aeaaee' => __DIR__ . '/../..' . '/lib/core/zpushdefs.php',
        'd2a63a53b4a43a2bd71de0cec5c1abfb' => __DIR__ . '/../..' . '/lib/utils/compat.php',
    );

    public static $classMap = array (
        'ASDevice' => __DIR__ . '/../..' . '/lib/core/asdevice.php',
        'AuthenticationRequiredException' => __DIR__ . '/../..' . '/lib/exceptions/authenticationrequiredexception.php',
        'Backend' => __DIR__ . '/../..' . '/lib/default/backend.php',
        'BackendDiff' => __DIR__ . '/../..' . '/lib/default/diffbackend/diffbackend.php',
        'BackendGrammm' => __DIR__ . '/../..' . '/backend/grammm/grammm.php',
        'BaseException' => __DIR__ . '/../..' . '/backend/grammm/mapi/class.baseexception.php',
        'BaseRecurrence' => __DIR__ . '/../..' . '/backend/grammm/mapi/class.baserecurrence.php',
        'BodyPartPreference' => __DIR__ . '/../..' . '/lib/core/bodypartpreference.php',
        'BodyPreference' => __DIR__ . '/../..' . '/lib/core/bodypreference.php',
        'ChangesMemoryWrapper' => __DIR__ . '/../..' . '/lib/core/changesmemorywrapper.php',
        'ContentParameters' => __DIR__ . '/../..' . '/lib/core/contentparameters.php',
        'DeviceManager' => __DIR__ . '/../..' . '/lib/core/devicemanager.php',
        'DiffState' => __DIR__ . '/../..' . '/lib/default/diffbackend/diffstate.php',
        'ExportChangesDiff' => __DIR__ . '/../..' . '/lib/default/diffbackend/exportchangesdiff.php',
        'ExportChangesICS' => __DIR__ . '/../..' . '/backend/grammm/exporter.php',
        'FatalException' => __DIR__ . '/../..' . '/lib/exceptions/fatalexception.php',
        'FatalMisconfigurationException' => __DIR__ . '/../..' . '/lib/exceptions/fatalmisconfigurationexception.php',
        'FatalNotImplementedException' => __DIR__ . '/../..' . '/lib/exceptions/fatalnotimplementedexception.php',
        'FileLog' => __DIR__ . '/../..' . '/lib/log/filelog.php',
        'FileStateMachine' => __DIR__ . '/../..' . '/lib/default/filestatemachine.php',
        'FolderChange' => __DIR__ . '/../..' . '/lib/request/folderchange.php',
        'FolderSync' => __DIR__ . '/../..' . '/lib/request/foldersync.php',
        'FreeBusyPublish' => __DIR__ . '/../..' . '/backend/grammm/mapi/class.freebusypublish.php',
        'GetAttachment' => __DIR__ . '/../..' . '/lib/request/getattachment.php',
        'GetHierarchy' => __DIR__ . '/../..' . '/lib/request/gethierarchy.php',
        'GetItemEstimate' => __DIR__ . '/../..' . '/lib/request/getitemestimate.php',
        'GrammmChangesWrapper' => __DIR__ . '/../..' . '/backend/grammm/kopanochangeswrapper.php',
        'HTTPReturnCodeException' => __DIR__ . '/../..' . '/lib/exceptions/httpreturncodeexception.php',
        'HierarchyCache' => __DIR__ . '/../..' . '/lib/core/hierarchycache.php',
        'IBackend' => __DIR__ . '/../..' . '/lib/interface/ibackend.php',
        'IChanges' => __DIR__ . '/../..' . '/lib/interface/ichanges.php',
        'IExportChanges' => __DIR__ . '/../..' . '/lib/interface/iexportchanges.php',
        'IImportChanges' => __DIR__ . '/../..' . '/lib/interface/iimportchanges.php',
        'IIpcProvider' => __DIR__ . '/../..' . '/lib/interface/iipcprovider.php',
        'ISearchProvider' => __DIR__ . '/../..' . '/lib/interface/isearchprovider.php',
        'IStateMachine' => __DIR__ . '/../..' . '/lib/interface/istatemachine.php',
        'ImportChangesDiff' => __DIR__ . '/../..' . '/lib/default/diffbackend/importchangesdiff.php',
        'ImportChangesICS' => __DIR__ . '/../..' . '/backend/grammm/importer.php',
        'ImportChangesStream' => __DIR__ . '/../..' . '/lib/core/streamimporter.php',
        'InterProcessData' => __DIR__ . '/../..' . '/lib/core/interprocessdata.php',
        'IpcMemcachedProvider' => __DIR__ . '/../..' . '/backend/ipcmemcached/ipcmemcachedprovider.php',
        'IpcSharedMemoryProvider' => __DIR__ . '/../..' . '/backend/ipcsharedmemory/ipcsharedmemoryprovider.php',
        'ItemOperations' => __DIR__ . '/../..' . '/lib/request/itemoperations.php',
        'Log' => __DIR__ . '/../..' . '/lib/log/log.php',
        'LoopDetection' => __DIR__ . '/../..' . '/lib/core/loopdetection.php',
        'MAPIException' => __DIR__ . '/../..' . '/backend/grammm/mapi/class.mapiexception.php',
        'MAPIMapping' => __DIR__ . '/../..' . '/backend/grammm/mapimapping.php',
        'MAPIProvider' => __DIR__ . '/../..' . '/backend/grammm/mapiprovider.php',
        'MAPIStreamWrapper' => __DIR__ . '/../..' . '/backend/grammm/mapistreamwrapper.php',
        'MAPIUtils' => __DIR__ . '/../..' . '/backend/grammm/mapiutils.php',
        'Mail_RFC822' => __DIR__ . '/../..' . '/include/z_RFC822.php',
        'MeetingResponse' => __DIR__ . '/../..' . '/lib/request/meetingresponse.php',
        'Meetingrequest' => __DIR__ . '/../..' . '/backend/grammm/mapi/class.meetingrequest.php',
        'MoveItems' => __DIR__ . '/../..' . '/lib/request/moveitems.php',
        'NoHierarchyCacheAvailableException' => __DIR__ . '/../..' . '/lib/exceptions/nohierarchycacheavailableexception.php',
        'NoPostRequestException' => __DIR__ . '/../..' . '/lib/exceptions/nopostrequestexception.php',
        'NotImplementedException' => __DIR__ . '/../..' . '/lib/exceptions/notimplementedexception.php',
        'Notify' => __DIR__ . '/../..' . '/lib/request/notify.php',
        'PHPWrapper' => __DIR__ . '/../..' . '/backend/grammm/mapiphpwrapper.php',
        'Ping' => __DIR__ . '/../..' . '/lib/request/ping.php',
        'PingTracking' => __DIR__ . '/../..' . '/lib/core/pingtracking.php',
        'Provisioning' => __DIR__ . '/../..' . '/lib/request/provisioning.php',
        'ProvisioningRequiredException' => __DIR__ . '/../..' . '/lib/exceptions/provisioningrequiredexception.php',
        'Recurrence' => __DIR__ . '/../..' . '/backend/grammm/mapi/class.recurrence.php',
        'ReplaceNullcharFilter' => __DIR__ . '/../..' . '/lib/wbxml/replacenullcharfilter.php',
        'ReplyBackImExporter' => __DIR__ . '/../..' . '/backend/grammm/replybackimexporter.php',
        'ReplyBackState' => __DIR__ . '/../..' . '/backend/grammm/replybackstate.php',
        'Request' => __DIR__ . '/../..' . '/lib/request/request.php',
        'RequestProcessor' => __DIR__ . '/../..' . '/lib/request/requestprocessor.php',
        'ResolveRecipients' => __DIR__ . '/../..' . '/lib/request/resolverecipients.php',
        'Search' => __DIR__ . '/../..' . '/lib/request/search.php',
        'SearchProvider' => __DIR__ . '/../..' . '/lib/default/searchprovider.php',
        'SendMail' => __DIR__ . '/../..' . '/lib/request/sendmail.php',
        'ServiceUnavailableException' => __DIR__ . '/../..' . '/lib/exceptions/serviceunavailableexception.php',
        'Settings' => __DIR__ . '/../..' . '/lib/request/settings.php',
        'SimpleMutex' => __DIR__ . '/../..' . '/lib/default/simplemutex.php',
        'SqlStateMachine' => __DIR__ . '/../..' . '/backend/sqlstatemachine/sqlstatemachine.php',
        'StateInvalidException' => __DIR__ . '/../..' . '/lib/exceptions/stateinvalidexception.php',
        'StateManager' => __DIR__ . '/../..' . '/lib/core/statemanager.php',
        'StateNotFoundException' => __DIR__ . '/../..' . '/lib/exceptions/statenotfoundexception.php',
        'StateNotYetAvailableException' => __DIR__ . '/../..' . '/lib/exceptions/statenotyetavailableexception.php',
        'StateObject' => __DIR__ . '/../..' . '/lib/core/stateobject.php',
        'StatusException' => __DIR__ . '/../..' . '/lib/exceptions/statusexception.php',
        'Streamer' => __DIR__ . '/../..' . '/lib/core/streamer.php',
        'StringStreamWrapper' => __DIR__ . '/../..' . '/lib/utils/stringstreamwrapper.php',
        'Sync' => __DIR__ . '/../..' . '/lib/request/sync.php',
        'SyncAccount' => __DIR__ . '/../..' . '/lib/syncobjects/syncaccount.php',
        'SyncAppointment' => __DIR__ . '/../..' . '/lib/syncobjects/syncappointment.php',
        'SyncAppointmentException' => __DIR__ . '/../..' . '/lib/syncobjects/syncappointmentexception.php',
        'SyncAttachment' => __DIR__ . '/../..' . '/lib/syncobjects/syncattachment.php',
        'SyncAttendee' => __DIR__ . '/../..' . '/lib/syncobjects/syncattendee.php',
        'SyncBaseAttachment' => __DIR__ . '/../..' . '/lib/syncobjects/syncbaseattachment.php',
        'SyncBaseBody' => __DIR__ . '/../..' . '/lib/syncobjects/syncbasebody.php',
        'SyncBaseBodyPart' => __DIR__ . '/../..' . '/lib/syncobjects/syncbasebodypart.php',
        'SyncCollections' => __DIR__ . '/../..' . '/lib/core/synccollections.php',
        'SyncContact' => __DIR__ . '/../..' . '/lib/syncobjects/synccontact.php',
        'SyncDeviceInformation' => __DIR__ . '/../..' . '/lib/syncobjects/syncdeviceinformation.php',
        'SyncDevicePassword' => __DIR__ . '/../..' . '/lib/syncobjects/syncdevicepassword.php',
        'SyncEmailAddresses' => __DIR__ . '/../..' . '/lib/syncobjects/syncemailaddresses.php',
        'SyncFolder' => __DIR__ . '/../..' . '/lib/syncobjects/syncfolder.php',
        'SyncItemOperationsAttachment' => __DIR__ . '/../..' . '/lib/syncobjects/syncitemoperationsattachment.php',
        'SyncMail' => __DIR__ . '/../..' . '/lib/syncobjects/syncmail.php',
        'SyncMailFlags' => __DIR__ . '/../..' . '/lib/syncobjects/syncmailflags.php',
        'SyncMeetingRequest' => __DIR__ . '/../..' . '/lib/syncobjects/syncmeetingrequest.php',
        'SyncMeetingRequestRecurrence' => __DIR__ . '/../..' . '/lib/syncobjects/syncmeetingrequestrecurrence.php',
        'SyncNote' => __DIR__ . '/../..' . '/lib/syncobjects/syncnote.php',
        'SyncOOF' => __DIR__ . '/../..' . '/lib/syncobjects/syncoof.php',
        'SyncOOFMessage' => __DIR__ . '/../..' . '/lib/syncobjects/syncoofmessage.php',
        'SyncObject' => __DIR__ . '/../..' . '/lib/syncobjects/syncobject.php',
        'SyncObjectBrokenException' => __DIR__ . '/../..' . '/lib/exceptions/syncobjectbrokenexception.php',
        'SyncParameters' => __DIR__ . '/../..' . '/lib/core/syncparameters.php',
        'SyncProvisioning' => __DIR__ . '/../..' . '/lib/syncobjects/syncprovisioning.php',
        'SyncRecurrence' => __DIR__ . '/../..' . '/lib/syncobjects/syncrecurrence.php',
        'SyncResolveRecipient' => __DIR__ . '/../..' . '/lib/syncobjects/syncresolverecipient.php',
        'SyncResolveRecipients' => __DIR__ . '/../..' . '/lib/syncobjects/syncresolverecipients.php',
        'SyncResolveRecipientsAvailability' => __DIR__ . '/../..' . '/lib/syncobjects/syncresolverecipientsavailability.php',
        'SyncResolveRecipientsCertificates' => __DIR__ . '/../..' . '/lib/syncobjects/syncresolverecipientscertificates.php',
        'SyncResolveRecipientsOptions' => __DIR__ . '/../..' . '/lib/syncobjects/syncresolverecipientsoptions.php',
        'SyncResolveRecipientsPicture' => __DIR__ . '/../..' . '/lib/syncobjects/syncresolverecipientspicture.php',
        'SyncResolveRecipientsResponse' => __DIR__ . '/../..' . '/lib/syncobjects/syncresolverecipientsresponse.php',
        'SyncRightsManagementLicense' => __DIR__ . '/../..' . '/lib/syncobjects/syncrightsmanagementlicense.php',
        'SyncRightsManagementTemplate' => __DIR__ . '/../..' . '/lib/syncobjects/syncrightsmanagementtemplate.php',
        'SyncRightsManagementTemplates' => __DIR__ . '/../..' . '/lib/syncobjects/syncrightsmanagementtemplates.php',
        'SyncSendMail' => __DIR__ . '/../..' . '/lib/syncobjects/syncsendmail.php',
        'SyncSendMailSource' => __DIR__ . '/../..' . '/lib/syncobjects/syncsendmailsource.php',
        'SyncTask' => __DIR__ . '/../..' . '/lib/syncobjects/synctask.php',
        'SyncTaskRecurrence' => __DIR__ . '/../..' . '/lib/syncobjects/synctaskrecurrence.php',
        'SyncUserInformation' => __DIR__ . '/../..' . '/lib/syncobjects/syncuserinformation.php',
        'SyncValidateCert' => __DIR__ . '/../..' . '/lib/syncobjects/syncvalidatecert.php',
        'Syslog' => __DIR__ . '/../..' . '/lib/log/syslog.php',
        'TaskRecurrence' => __DIR__ . '/../..' . '/backend/grammm/mapi/class.taskrecurrence.php',
        'TaskRequest' => __DIR__ . '/../..' . '/backend/grammm/mapi/class.taskrequest.php',
        'TimezoneUtil' => __DIR__ . '/../..' . '/lib/utils/timezoneutil.php',
        'TopCollector' => __DIR__ . '/../..' . '/lib/core/topcollector.php',
        'UnavailableException' => __DIR__ . '/../..' . '/lib/exceptions/unavailableexception.php',
        'UserStoreInfo' => __DIR__ . '/../..' . '/lib/core/userstoreinfo.php',
        'Utils' => __DIR__ . '/../..' . '/lib/utils/utils.php',
        'ValidateCert' => __DIR__ . '/../..' . '/lib/request/validatecert.php',
        'WBXMLDecoder' => __DIR__ . '/../..' . '/lib/wbxml/wbxmldecoder.php',
        'WBXMLDefs' => __DIR__ . '/../..' . '/lib/wbxml/wbxmldefs.php',
        'WBXMLEncoder' => __DIR__ . '/../..' . '/lib/wbxml/wbxmlencoder.php',
        'WBXMLException' => __DIR__ . '/../..' . '/lib/exceptions/wbxmlexception.php',
        'Webservice' => __DIR__ . '/../..' . '/lib/webservice/webservice.php',
        'WebserviceDevice' => __DIR__ . '/../..' . '/lib/webservice/webservicedevice.php',
        'WebserviceInfo' => __DIR__ . '/../..' . '/lib/webservice/webserviceinfo.php',
        'WebserviceUsers' => __DIR__ . '/../..' . '/lib/webservice/webserviceusers.php',
        'ZLog' => __DIR__ . '/../..' . '/lib/core/zlog.php',
        'ZPush' => __DIR__ . '/../..' . '/lib/core/zpush.php',
        'ZPushAdmin' => __DIR__ . '/../..' . '/lib/utils/zpushadmin.php',
        'ZPushAutodiscover' => __DIR__ . '/../..' . '/autodiscover/autodiscover.php',
        'ZPushException' => __DIR__ . '/../..' . '/lib/exceptions/zpushexception.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit153a56a781a72686b71399955d98204f::$classMap;

        }, null, ClassLoader::class);
    }
}
