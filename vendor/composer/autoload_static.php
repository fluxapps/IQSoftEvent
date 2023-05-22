<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfeaf42e7739784cbfb86761aa576873a
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\RemovePluginDataConfirm\\IQSoftEvent\\' => 41,
            'srag\\LibraryLanguageInstaller\\IQSoftEvent\\' => 42,
            'srag\\LibrariesNamespaceChanger\\' => 31,
            'srag\\DIC\\IQSoftEvent\\' => 21,
            'srag\\CustomInputGUIs\\IQSoftEvent\\' => 33,
            'srag\\ActiveRecordConfig\\IQSoftEvent\\' => 36,
        ),
        'f' => 
        array (
            'fluxlabs\\Plugins\\IQSoftEvent\\' => 29,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
        ),
        'L' => 
        array (
            'League\\OAuth2\\Client\\' => 21,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\RemovePluginDataConfirm\\IQSoftEvent\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src',
        ),
        'srag\\LibraryLanguageInstaller\\IQSoftEvent\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librarylanguageinstaller/src',
        ),
        'srag\\LibrariesNamespaceChanger\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src',
        ),
        'srag\\DIC\\IQSoftEvent\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'srag\\CustomInputGUIs\\IQSoftEvent\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/custominputguis/src',
        ),
        'srag\\ActiveRecordConfig\\IQSoftEvent\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/activerecordconfig/src',
        ),
        'fluxlabs\\Plugins\\IQSoftEvent\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'League\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/oauth2-client/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'GuzzleHttp\\BodySummarizer' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/BodySummarizer.php',
        'GuzzleHttp\\BodySummarizerInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/BodySummarizerInterface.php',
        'GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'GuzzleHttp\\ClientTrait' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientTrait.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\GuzzleException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
        'GuzzleHttp\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/InvalidArgumentException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'GuzzleHttp\\HandlerStack' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HandlerStack.php',
        'GuzzleHttp\\Handler\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
        'GuzzleHttp\\Handler\\CurlFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
        'GuzzleHttp\\Handler\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
        'GuzzleHttp\\Handler\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
        'GuzzleHttp\\Handler\\EasyHandle' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
        'GuzzleHttp\\Handler\\HeaderProcessor' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/HeaderProcessor.php',
        'GuzzleHttp\\Handler\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
        'GuzzleHttp\\Handler\\Proxy' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
        'GuzzleHttp\\Handler\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
        'GuzzleHttp\\MessageFormatter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatter.php',
        'GuzzleHttp\\MessageFormatterInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatterInterface.php',
        'GuzzleHttp\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Middleware.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'GuzzleHttp\\PrepareBodyMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
        'GuzzleHttp\\Promise\\AggregateException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/AggregateException.php',
        'GuzzleHttp\\Promise\\CancellationException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/CancellationException.php',
        'GuzzleHttp\\Promise\\Coroutine' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Coroutine.php',
        'GuzzleHttp\\Promise\\Create' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Create.php',
        'GuzzleHttp\\Promise\\Each' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Each.php',
        'GuzzleHttp\\Promise\\EachPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/EachPromise.php',
        'GuzzleHttp\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/FulfilledPromise.php',
        'GuzzleHttp\\Promise\\Is' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Is.php',
        'GuzzleHttp\\Promise\\Promise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Promise.php',
        'GuzzleHttp\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromiseInterface.php',
        'GuzzleHttp\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromisorInterface.php',
        'GuzzleHttp\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectedPromise.php',
        'GuzzleHttp\\Promise\\RejectionException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectionException.php',
        'GuzzleHttp\\Promise\\TaskQueue' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueue.php',
        'GuzzleHttp\\Promise\\TaskQueueInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueueInterface.php',
        'GuzzleHttp\\Promise\\Utils' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Utils.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'GuzzleHttp\\Psr7\\Exception\\MalformedUriException' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Exception/MalformedUriException.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'GuzzleHttp\\Psr7\\Header' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Header.php',
        'GuzzleHttp\\Psr7\\HttpFactory' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/HttpFactory.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'GuzzleHttp\\Psr7\\Message' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Message.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MimeType' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MimeType.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'GuzzleHttp\\Psr7\\Query' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Query.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'GuzzleHttp\\Psr7\\Rfc7230' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Rfc7230.php',
        'GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'GuzzleHttp\\Psr7\\UriComparator' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriComparator.php',
        'GuzzleHttp\\Psr7\\UriNormalizer' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriNormalizer.php',
        'GuzzleHttp\\Psr7\\UriResolver' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriResolver.php',
        'GuzzleHttp\\Psr7\\Utils' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Utils.php',
        'GuzzleHttp\\RedirectMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
        'GuzzleHttp\\RequestOptions' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestOptions.php',
        'GuzzleHttp\\RetryMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
        'GuzzleHttp\\TransferStats' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/TransferStats.php',
        'GuzzleHttp\\Utils' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Utils.php',
        'League\\OAuth2\\Client\\Grant\\AbstractGrant' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/AbstractGrant.php',
        'League\\OAuth2\\Client\\Grant\\AuthorizationCode' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/AuthorizationCode.php',
        'League\\OAuth2\\Client\\Grant\\ClientCredentials' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/ClientCredentials.php',
        'League\\OAuth2\\Client\\Grant\\Exception\\InvalidGrantException' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/Exception/InvalidGrantException.php',
        'League\\OAuth2\\Client\\Grant\\GrantFactory' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/GrantFactory.php',
        'League\\OAuth2\\Client\\Grant\\Password' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/Password.php',
        'League\\OAuth2\\Client\\Grant\\RefreshToken' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/RefreshToken.php',
        'League\\OAuth2\\Client\\OptionProvider\\HttpBasicAuthOptionProvider' => __DIR__ . '/..' . '/league/oauth2-client/src/OptionProvider/HttpBasicAuthOptionProvider.php',
        'League\\OAuth2\\Client\\OptionProvider\\OptionProviderInterface' => __DIR__ . '/..' . '/league/oauth2-client/src/OptionProvider/OptionProviderInterface.php',
        'League\\OAuth2\\Client\\OptionProvider\\PostAuthOptionProvider' => __DIR__ . '/..' . '/league/oauth2-client/src/OptionProvider/PostAuthOptionProvider.php',
        'League\\OAuth2\\Client\\Provider\\AbstractProvider' => __DIR__ . '/..' . '/league/oauth2-client/src/Provider/AbstractProvider.php',
        'League\\OAuth2\\Client\\Provider\\Exception\\IdentityProviderException' => __DIR__ . '/..' . '/league/oauth2-client/src/Provider/Exception/IdentityProviderException.php',
        'League\\OAuth2\\Client\\Provider\\GenericProvider' => __DIR__ . '/..' . '/league/oauth2-client/src/Provider/GenericProvider.php',
        'League\\OAuth2\\Client\\Provider\\GenericResourceOwner' => __DIR__ . '/..' . '/league/oauth2-client/src/Provider/GenericResourceOwner.php',
        'League\\OAuth2\\Client\\Provider\\ResourceOwnerInterface' => __DIR__ . '/..' . '/league/oauth2-client/src/Provider/ResourceOwnerInterface.php',
        'League\\OAuth2\\Client\\Token\\AccessToken' => __DIR__ . '/..' . '/league/oauth2-client/src/Token/AccessToken.php',
        'League\\OAuth2\\Client\\Token\\AccessTokenInterface' => __DIR__ . '/..' . '/league/oauth2-client/src/Token/AccessTokenInterface.php',
        'League\\OAuth2\\Client\\Token\\ResourceOwnerAccessTokenInterface' => __DIR__ . '/..' . '/league/oauth2-client/src/Token/ResourceOwnerAccessTokenInterface.php',
        'League\\OAuth2\\Client\\Tool\\ArrayAccessorTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/ArrayAccessorTrait.php',
        'League\\OAuth2\\Client\\Tool\\BearerAuthorizationTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/BearerAuthorizationTrait.php',
        'League\\OAuth2\\Client\\Tool\\GuardedPropertyTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/GuardedPropertyTrait.php',
        'League\\OAuth2\\Client\\Tool\\MacAuthorizationTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/MacAuthorizationTrait.php',
        'League\\OAuth2\\Client\\Tool\\ProviderRedirectTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/ProviderRedirectTrait.php',
        'League\\OAuth2\\Client\\Tool\\QueryBuilderTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/QueryBuilderTrait.php',
        'League\\OAuth2\\Client\\Tool\\RequestFactory' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/RequestFactory.php',
        'League\\OAuth2\\Client\\Tool\\RequiredParameterTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/RequiredParameterTrait.php',
        'Psr\\Http\\Client\\ClientExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/ClientExceptionInterface.php',
        'Psr\\Http\\Client\\ClientInterface' => __DIR__ . '/..' . '/psr/http-client/src/ClientInterface.php',
        'Psr\\Http\\Client\\NetworkExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/NetworkExceptionInterface.php',
        'Psr\\Http\\Client\\RequestExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/RequestExceptionInterface.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/RequestFactoryInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ResponseFactoryInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ServerRequestFactoryInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/StreamFactoryInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UploadedFileFactoryInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UriFactoryInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'fluxlabs\\Plugins\\IQSoftEvent\\Config\\ConfigCtrl' => __DIR__ . '/../..' . '/src/Config/class.ConfigCtrl.php',
        'fluxlabs\\Plugins\\IQSoftEvent\\Config\\Factory' => __DIR__ . '/../..' . '/src/Config/Factory.php',
        'fluxlabs\\Plugins\\IQSoftEvent\\Config\\Form\\ConfigFormGUI' => __DIR__ . '/../..' . '/src/Config/Form/ConfigFormGUI.php',
        'fluxlabs\\Plugins\\IQSoftEvent\\Config\\Form\\FormBuilder' => __DIR__ . '/../..' . '/src/Config/Form/FormBuilder.php',
        'fluxlabs\\Plugins\\IQSoftEvent\\Config\\Repository' => __DIR__ . '/../..' . '/src/Config/Repository.php',
        'fluxlabs\\Plugins\\IQSoftEvent\\IQSoftClient\\Auth\\AuthClient' => __DIR__ . '/../..' . '/src/IQSoftClient/Auth/AuthClient.php',
        'fluxlabs\\Plugins\\IQSoftEvent\\IQSoftClient\\Auth\\AuthClientConfigDTO' => __DIR__ . '/../..' . '/src/IQSoftClient/Auth/AuthClientConfigDTO.php',
        'fluxlabs\\Plugins\\IQSoftEvent\\IQSoftClient\\Auth\\AuthTokenDTO' => __DIR__ . '/../..' . '/src/IQSoftClient/Auth/AuthTokenDTO.php',
        'fluxlabs\\Plugins\\IQSoftEvent\\IQSoftClient\\Auth\\AuthTokenRepository' => __DIR__ . '/../..' . '/src/IQSoftClient/Auth/AuthTokenRepository.php',
        'fluxlabs\\Plugins\\IQSoftEvent\\IQSoftClient\\Auth\\OAuth2Provider' => __DIR__ . '/../..' . '/src/IQSoftClient/Auth/OAuth2Provider.php',
        'fluxlabs\\Plugins\\IQSoftEvent\\IQSoftClient\\Certificate\\CertificateDTO' => __DIR__ . '/../..' . '/src/IQSoftClient/Certificate/CertificateDTO.php',
        'fluxlabs\\Plugins\\IQSoftEvent\\IQSoftClient\\Certificate\\DocClient' => __DIR__ . '/../..' . '/src/IQSoftClient/Certificate/DocClient.php',
        'fluxlabs\\Plugins\\IQSoftEvent\\IQSoftClient\\Certificate\\DocClientException' => __DIR__ . '/../..' . '/src/IQSoftClient/Certificate/DocClientException.php',
        'fluxlabs\\Plugins\\IQSoftEvent\\IQSoftClient\\IQSoftClient' => __DIR__ . '/../..' . '/src/IQSoftClient/IQSoftClient.php',
        'fluxlabs\\Plugins\\IQSoftEvent\\Infrastructure\\ActiveRecord\\FailedTransmissionAR' => __DIR__ . '/../..' . '/src/Infrastructure/ActiveRecord/FailedTransmissionAR.php',
        'fluxlabs\\Plugins\\IQSoftEvent\\Infrastructure\\CertificateDTOBuilder' => __DIR__ . '/../..' . '/src/Infrastructure/CertificateDTOBuilder.php',
        'fluxlabs\\Plugins\\IQSoftEvent\\Infrastructure\\PluginConfigAuthTokenRepository' => __DIR__ . '/../..' . '/src/Infrastructure/PluginConfigAuthTokenRepository.php',
        'fluxlabs\\Plugins\\IQSoftEvent\\Repository' => __DIR__ . '/../..' . '/src/Repository.php',
        'fluxlabs\\Plugins\\IQSoftEvent\\Utils\\IQSoftEventTrait' => __DIR__ . '/../..' . '/src/Utils/IQSoftEventTrait.php',
        'ilIQSoftEventConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilIQSoftEventConfigGUI.php',
        'ilIQSoftEventPlugin' => __DIR__ . '/../..' . '/classes/class.ilIQSoftEventPlugin.php',
        'srag\\ActiveRecordConfig\\IQSoftEvent\\ActiveRecordConfig' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
        'srag\\ActiveRecordConfig\\IQSoftEvent\\ActiveRecordConfigFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigFormGUI.php',
        'srag\\ActiveRecordConfig\\IQSoftEvent\\ActiveRecordConfigGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigGUI.php',
        'srag\\ActiveRecordConfig\\IQSoftEvent\\ActiveRecordConfigTableGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigTableGUI.php',
        'srag\\ActiveRecordConfig\\IQSoftEvent\\ActiveRecordObjectFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordObjectFormGUI.php',
        'srag\\ActiveRecordConfig\\IQSoftEvent\\Config\\AbstractFactory' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Config/AbstractFactory.php',
        'srag\\ActiveRecordConfig\\IQSoftEvent\\Config\\AbstractRepository' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Config/AbstractRepository.php',
        'srag\\ActiveRecordConfig\\IQSoftEvent\\Config\\Config' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Config/Config.php',
        'srag\\ActiveRecordConfig\\IQSoftEvent\\Exception\\ActiveRecordConfigException' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Exception/ActiveRecordConfigException.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\CheckboxInputGUI\\CheckboxInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/CheckboxInputGUI/CheckboxInputGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\CustomInputGUIs' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIs.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\CustomInputGUIsTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIsTrait.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\DateDurationInputGUI\\DateDurationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/DateDurationInputGUI/DateDurationInputGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\FormBuilder\\AbstractFormBuilder' => __DIR__ . '/..' . '/srag/custominputguis/src/FormBuilder/AbstractFormBuilder.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\FormBuilder\\FormBuilder' => __DIR__ . '/..' . '/srag/custominputguis/src/FormBuilder/FormBuilder.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\GlyphGUI\\GlyphGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/GlyphGUI/GlyphGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\HiddenInputGUI\\HiddenInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/HiddenInputGUI/HiddenInputGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint54' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint54.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraintTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraintTrait.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\InputGUIWrapperUIInputComponent\\InputGUIWrapperUIInputComponent' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperUIInputComponent.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\InputGUIWrapperUIInputComponent\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/Renderer.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\LearningProgressPieUI\\AbstractLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/AbstractLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\LearningProgressPieUI\\CountLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/CountLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\LearningProgressPieUI\\LearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/LearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\LearningProgressPieUI\\ObjIdsLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/ObjIdsLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\LearningProgressPieUI\\UsrIdsLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/UsrIdsLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\MultiLineInputGUI\\MultiLineInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineInputGUI/MultiLineInputGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\MultiLineNewInputGUI\\MultiLineNewInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineNewInputGUI/MultiLineNewInputGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\MultiSelectSearchInputGUI\\MultiSelectSearchInput2GUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInput2GUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\MultiSelectSearchInputGUI\\MultiSelectSearchInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInputGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\MultiSelectSearchNewInputGUI\\AbstractAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/AbstractAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\MultiSelectSearchNewInputGUI\\MultiSelectSearchNewInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/MultiSelectSearchNewInputGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\NumberInputGUI\\NumberInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/NumberInputGUI/NumberInputGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\PieChart\\Component\\LegendEntry' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/LegendEntry.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\PieChart\\Component\\PieChart' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/PieChart.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\PieChart\\Component\\PieChartItem' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/PieChartItem.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\PieChart\\Component\\Section' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/Section.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\PieChart\\Component\\SectionValue' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/SectionValue.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\PieChart\\Implementation\\LegendEntry' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/LegendEntry.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\PieChart\\Implementation\\PieChart' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/PieChart.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\PieChart\\Implementation\\PieChartItem' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/PieChartItem.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\PieChart\\Implementation\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/Renderer.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\PieChart\\Implementation\\Section' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/Section.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\PieChart\\Implementation\\SectionValue' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/SectionValue.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\ProgressMeter\\Component\\Factory' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/Factory.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\ProgressMeter\\Component\\FixedSize' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/FixedSize.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\ProgressMeter\\Component\\Mini' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/Mini.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\ProgressMeter\\Component\\ProgressMeter' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/ProgressMeter.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\ProgressMeter\\Component\\Standard' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/Standard.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\ProgressMeter\\Implementation\\Factory' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Factory.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\ProgressMeter\\Implementation\\FixedSize' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/FixedSize.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\ProgressMeter\\Implementation\\Mini' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Mini.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\ProgressMeter\\Implementation\\ProgressMeter' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/ProgressMeter.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\ProgressMeter\\Implementation\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Renderer.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\ProgressMeter\\Implementation\\Standard' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Standard.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\PropertyFormGUI\\ConfigPropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/ConfigPropertyFormGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\PropertyFormGUI\\Exception\\PropertyFormGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Exception/PropertyFormGUIException.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\PropertyFormGUI\\Items\\Items' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Items/Items.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\PropertyFormGUI\\ObjectPropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/ObjectPropertyFormGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\PropertyFormGUI\\PropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/PropertyFormGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\ScreenshotsInputGUI\\ScreenshotsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ScreenshotsInputGUI/ScreenshotsInputGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\StaticHTMLPresentationInputGUI\\StaticHTMLPresentationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/StaticHTMLPresentationInputGUI/StaticHTMLPresentationInputGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\TableGUI\\Exception\\TableGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/Exception/TableGUIException.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\TableGUI\\TableGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/TableGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\TabsInputGUI\\MultilangualTabsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/MultilangualTabsInputGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\TabsInputGUI\\TabsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\TabsInputGUI\\TabsInputGUITab' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUITab.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\Template\\Template' => __DIR__ . '/..' . '/srag/custominputguis/src/Template/Template.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\TextAreaInputGUI\\TextAreaInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextAreaInputGUI/TextAreaInputGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\TextInputGUI\\TextInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\TextInputGUI\\TextInputGUIWithModernAutoComplete' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUIWithModernAutoComplete.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperInputGUI.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperNameSource' => __DIR__ . '/..' . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperNameSource.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\Waiter\\Waiter' => __DIR__ . '/..' . '/srag/custominputguis/src/Waiter/Waiter.php',
        'srag\\CustomInputGUIs\\IQSoftEvent\\WeekdayInputGUI\\WeekdayInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/WeekdayInputGUI/WeekdayInputGUI.php',
        'srag\\DIC\\IQSoftEvent\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\IQSoftEvent\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\IQSoftEvent\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\IQSoftEvent\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\IQSoftEvent\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\IQSoftEvent\\DIC\\Implementation\\ILIAS53DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS53DIC.php',
        'srag\\DIC\\IQSoftEvent\\DIC\\Implementation\\ILIAS54DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS54DIC.php',
        'srag\\DIC\\IQSoftEvent\\DIC\\Implementation\\ILIAS60DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS60DIC.php',
        'srag\\DIC\\IQSoftEvent\\Database\\AbstractILIASDatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/AbstractILIASDatabaseDetector.php',
        'srag\\DIC\\IQSoftEvent\\Database\\DatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseDetector.php',
        'srag\\DIC\\IQSoftEvent\\Database\\DatabaseInterface' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseInterface.php',
        'srag\\DIC\\IQSoftEvent\\Database\\PdoContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoContextHelper.php',
        'srag\\DIC\\IQSoftEvent\\Database\\PdoStatementContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoStatementContextHelper.php',
        'srag\\DIC\\IQSoftEvent\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\IQSoftEvent\\Output\\Output' => __DIR__ . '/..' . '/srag/dic/src/Output/Output.php',
        'srag\\DIC\\IQSoftEvent\\Output\\OutputInterface' => __DIR__ . '/..' . '/srag/dic/src/Output/OutputInterface.php',
        'srag\\DIC\\IQSoftEvent\\PHPVersionChecker' => __DIR__ . '/..' . '/srag/dic/src/PHPVersionChecker.php',
        'srag\\DIC\\IQSoftEvent\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\IQSoftEvent\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\DIC\\IQSoftEvent\\Plugin\\Pluginable' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Pluginable.php',
        'srag\\DIC\\IQSoftEvent\\Util\\LibraryLanguageInstaller' => __DIR__ . '/..' . '/srag/dic/src/Util/LibraryLanguageInstaller.php',
        'srag\\DIC\\IQSoftEvent\\Version\\Version' => __DIR__ . '/..' . '/srag/dic/src/Version/Version.php',
        'srag\\DIC\\IQSoftEvent\\Version\\VersionInterface' => __DIR__ . '/..' . '/srag/dic/src/Version/VersionInterface.php',
        'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
        'srag\\LibrariesNamespaceChanger\\PHP72Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP72Backport.php',
        'srag\\LibrariesNamespaceChanger\\PHP7Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP7Backport.php',
        'srag\\LibrariesNamespaceChanger\\RemovePHP72Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/RemovePHP72Backport.php',
        'srag\\LibraryLanguageInstaller\\IQSoftEvent\\LibraryLanguageInstaller' => __DIR__ . '/..' . '/srag/librarylanguageinstaller/src/LibraryLanguageInstaller.php',
        'srag\\RemovePluginDataConfirm\\IQSoftEvent\\BasePluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/BasePluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\IQSoftEvent\\PluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\IQSoftEvent\\RemovePluginDataConfirmCtrl' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/class.RemovePluginDataConfirmCtrl.php',
        'srag\\RemovePluginDataConfirm\\IQSoftEvent\\RepositoryObjectPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfeaf42e7739784cbfb86761aa576873a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfeaf42e7739784cbfb86761aa576873a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfeaf42e7739784cbfb86761aa576873a::$classMap;

        }, null, ClassLoader::class);
    }
}
