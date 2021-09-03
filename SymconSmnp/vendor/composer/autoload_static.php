<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf05cfa02d76c20d6a6b13424c8731ba9
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FreeDSx\\Socket\\' => 15,
            'FreeDSx\\Snmp\\' => 13,
            'FreeDSx\\Asn1\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FreeDSx\\Socket\\' => 
        array (
            0 => __DIR__ . '/..' . '/freedsx/socket/src/FreeDSx/Socket',
        ),
        'FreeDSx\\Snmp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/FreeDSx/Snmp',
            1 => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp',
        ),
        'FreeDSx\\Asn1\\' => 
        array (
            0 => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'FreeDSx\\Asn1\\Asn1' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Asn1.php',
        'FreeDSx\\Asn1\\Encoder\\BerEncoder' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Encoder/BerEncoder.php',
        'FreeDSx\\Asn1\\Encoder\\CerDerTrait' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Encoder/CerDerTrait.php',
        'FreeDSx\\Asn1\\Encoder\\DerEncoder' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Encoder/DerEncoder.php',
        'FreeDSx\\Asn1\\Encoder\\EncoderInterface' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Encoder/EncoderInterface.php',
        'FreeDSx\\Asn1\\Encoders' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Encoders.php',
        'FreeDSx\\Asn1\\Exception\\EncoderException' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Exception/EncoderException.php',
        'FreeDSx\\Asn1\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Exception/InvalidArgumentException.php',
        'FreeDSx\\Asn1\\Exception\\PartialPduException' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Exception/PartialPduException.php',
        'FreeDSx\\Asn1\\Type\\AbstractStringType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/AbstractStringType.php',
        'FreeDSx\\Asn1\\Type\\AbstractTimeType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/AbstractTimeType.php',
        'FreeDSx\\Asn1\\Type\\AbstractType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/AbstractType.php',
        'FreeDSx\\Asn1\\Type\\BigIntTrait' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/BigIntTrait.php',
        'FreeDSx\\Asn1\\Type\\BitStringType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/BitStringType.php',
        'FreeDSx\\Asn1\\Type\\BmpStringType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/BmpStringType.php',
        'FreeDSx\\Asn1\\Type\\BooleanType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/BooleanType.php',
        'FreeDSx\\Asn1\\Type\\CharacterStringType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/CharacterStringType.php',
        'FreeDSx\\Asn1\\Type\\EnumeratedType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/EnumeratedType.php',
        'FreeDSx\\Asn1\\Type\\GeneralStringType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/GeneralStringType.php',
        'FreeDSx\\Asn1\\Type\\GeneralizedTimeType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/GeneralizedTimeType.php',
        'FreeDSx\\Asn1\\Type\\GraphicStringType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/GraphicStringType.php',
        'FreeDSx\\Asn1\\Type\\IA5StringType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/IA5StringType.php',
        'FreeDSx\\Asn1\\Type\\IncompleteType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/IncompleteType.php',
        'FreeDSx\\Asn1\\Type\\IntegerType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/IntegerType.php',
        'FreeDSx\\Asn1\\Type\\NullType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/NullType.php',
        'FreeDSx\\Asn1\\Type\\NumericStringType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/NumericStringType.php',
        'FreeDSx\\Asn1\\Type\\OctetStringType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/OctetStringType.php',
        'FreeDSx\\Asn1\\Type\\OidType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/OidType.php',
        'FreeDSx\\Asn1\\Type\\PrintableStringType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/PrintableStringType.php',
        'FreeDSx\\Asn1\\Type\\RealType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/RealType.php',
        'FreeDSx\\Asn1\\Type\\RelativeOidType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/RelativeOidType.php',
        'FreeDSx\\Asn1\\Type\\SequenceOfType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/SequenceOfType.php',
        'FreeDSx\\Asn1\\Type\\SequenceType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/SequenceType.php',
        'FreeDSx\\Asn1\\Type\\SetOfType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/SetOfType.php',
        'FreeDSx\\Asn1\\Type\\SetTrait' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/SetTrait.php',
        'FreeDSx\\Asn1\\Type\\SetType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/SetType.php',
        'FreeDSx\\Asn1\\Type\\TeletexStringType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/TeletexStringType.php',
        'FreeDSx\\Asn1\\Type\\UniversalStringType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/UniversalStringType.php',
        'FreeDSx\\Asn1\\Type\\UtcTimeType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/UtcTimeType.php',
        'FreeDSx\\Asn1\\Type\\Utf8StringType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/Utf8StringType.php',
        'FreeDSx\\Asn1\\Type\\VideotexStringType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/VideotexStringType.php',
        'FreeDSx\\Asn1\\Type\\VisibleStringType' => __DIR__ . '/..' . '/freedsx/asn1/src/FreeDSx/Asn1/Type/VisibleStringType.php',
        'FreeDSx\\Snmp\\Exception\\ConnectionException' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Exception/ConnectionException.php',
        'FreeDSx\\Snmp\\Exception\\EndOfWalkException' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Exception/EndOfWalkException.php',
        'FreeDSx\\Snmp\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Exception/InvalidArgumentException.php',
        'FreeDSx\\Snmp\\Exception\\ProtocolException' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Exception/ProtocolException.php',
        'FreeDSx\\Snmp\\Exception\\RediscoveryNeededException' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Exception/RediscoveryNeededException.php',
        'FreeDSx\\Snmp\\Exception\\RuntimeException' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Exception/RuntimeException.php',
        'FreeDSx\\Snmp\\Exception\\SecurityModelException' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Exception/SecurityModelException.php',
        'FreeDSx\\Snmp\\Exception\\SnmpAuthenticationException' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Exception/SnmpAuthenticationException.php',
        'FreeDSx\\Snmp\\Exception\\SnmpEncryptionException' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Exception/SnmpEncryptionException.php',
        'FreeDSx\\Snmp\\Exception\\SnmpRequestException' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Exception/SnmpRequestException.php',
        'FreeDSx\\Snmp\\Exception\\UnexpectedValueException' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Exception/UnexpectedValueException.php',
        'FreeDSx\\Snmp\\Message\\AbstractMessage' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/AbstractMessage.php',
        'FreeDSx\\Snmp\\Message\\AbstractMessageV3' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/AbstractMessageV3.php',
        'FreeDSx\\Snmp\\Message\\EngineId' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/EngineId.php',
        'FreeDSx\\Snmp\\Message\\ErrorStatus' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/ErrorStatus.php',
        'FreeDSx\\Snmp\\Message\\MessageHeader' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/MessageHeader.php',
        'FreeDSx\\Snmp\\Message\\Pdu' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/Pdu.php',
        'FreeDSx\\Snmp\\Message\\Request\\MessageRequest' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/Request/MessageRequest.php',
        'FreeDSx\\Snmp\\Message\\Request\\MessageRequestInterface' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/Request/MessageRequestInterface.php',
        'FreeDSx\\Snmp\\Message\\Request\\MessageRequestTrait' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/Request/MessageRequestTrait.php',
        'FreeDSx\\Snmp\\Message\\Request\\MessageRequestV1' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/Request/MessageRequestV1.php',
        'FreeDSx\\Snmp\\Message\\Request\\MessageRequestV2' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/Request/MessageRequestV2.php',
        'FreeDSx\\Snmp\\Message\\Request\\MessageRequestV3' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/Request/MessageRequestV3.php',
        'FreeDSx\\Snmp\\Message\\Response\\MessageResponse' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/Response/MessageResponse.php',
        'FreeDSx\\Snmp\\Message\\Response\\MessageResponseInterface' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/Response/MessageResponseInterface.php',
        'FreeDSx\\Snmp\\Message\\Response\\MessageResponseTrait' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/Response/MessageResponseTrait.php',
        'FreeDSx\\Snmp\\Message\\Response\\MessageResponseV1' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/Response/MessageResponseV1.php',
        'FreeDSx\\Snmp\\Message\\Response\\MessageResponseV2' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/Response/MessageResponseV2.php',
        'FreeDSx\\Snmp\\Message\\Response\\MessageResponseV3' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/Response/MessageResponseV3.php',
        'FreeDSx\\Snmp\\Message\\ScopedPdu' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/ScopedPdu.php',
        'FreeDSx\\Snmp\\Message\\ScopedPduRequest' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/ScopedPduRequest.php',
        'FreeDSx\\Snmp\\Message\\ScopedPduResponse' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/ScopedPduResponse.php',
        'FreeDSx\\Snmp\\Message\\Security\\SecurityParametersInterface' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/Security/SecurityParametersInterface.php',
        'FreeDSx\\Snmp\\Message\\Security\\UsmSecurityParameters' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Message/Security/UsmSecurityParameters.php',
        'FreeDSx\\Snmp\\Module\\Authentication\\AuthenticationModule' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Module/Authentication/AuthenticationModule.php',
        'FreeDSx\\Snmp\\Module\\Authentication\\AuthenticationModuleInterface' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Module/Authentication/AuthenticationModuleInterface.php',
        'FreeDSx\\Snmp\\Module\\Privacy\\AESPrivacyModule' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Module/Privacy/AESPrivacyModule.php',
        'FreeDSx\\Snmp\\Module\\Privacy\\DES3PrivacyModule' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Module/Privacy/DES3PrivacyModule.php',
        'FreeDSx\\Snmp\\Module\\Privacy\\DESPrivacyModule' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Module/Privacy/DESPrivacyModule.php',
        'FreeDSx\\Snmp\\Module\\Privacy\\DESPrivacyTrait' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Module/Privacy/DESPrivacyTrait.php',
        'FreeDSx\\Snmp\\Module\\Privacy\\PrivacyModuleInterface' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Module/Privacy/PrivacyModuleInterface.php',
        'FreeDSx\\Snmp\\Module\\Privacy\\PrivacyTrait' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Module/Privacy/PrivacyTrait.php',
        'FreeDSx\\Snmp\\Module\\SecurityModel\\SecurityModelModuleInterface' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Module/SecurityModel/SecurityModelModuleInterface.php',
        'FreeDSx\\Snmp\\Module\\SecurityModel\\UserSecurityModelModule' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Module/SecurityModel/UserSecurityModelModule.php',
        'FreeDSx\\Snmp\\Module\\SecurityModel\\Usm\\TimeSync' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Module/SecurityModel/Usm/TimeSync.php',
        'FreeDSx\\Snmp\\Module\\SecurityModel\\Usm\\UsmUser' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Module/SecurityModel/Usm/UsmUser.php',
        'FreeDSx\\Snmp\\Oid' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Oid.php',
        'FreeDSx\\Snmp\\OidList' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/OidList.php',
        'FreeDSx\\Snmp\\OidValues' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/OidValues.php',
        'FreeDSx\\Snmp\\Protocol\\ClientProtocolHandler' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Protocol/ClientProtocolHandler.php',
        'FreeDSx\\Snmp\\Protocol\\Factory\\AuthenticationModuleFactory' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Protocol/Factory/AuthenticationModuleFactory.php',
        'FreeDSx\\Snmp\\Protocol\\Factory\\OidValueFactory' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Protocol/Factory/OidValueFactory.php',
        'FreeDSx\\Snmp\\Protocol\\Factory\\PrivacyModuleFactory' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Protocol/Factory/PrivacyModuleFactory.php',
        'FreeDSx\\Snmp\\Protocol\\Factory\\RequestFactory' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Protocol/Factory/RequestFactory.php',
        'FreeDSx\\Snmp\\Protocol\\Factory\\ResponseFactory' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Protocol/Factory/ResponseFactory.php',
        'FreeDSx\\Snmp\\Protocol\\Factory\\SecurityModelModuleFactory' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Protocol/Factory/SecurityModelModuleFactory.php',
        'FreeDSx\\Snmp\\Protocol\\Factory\\SecurityParametersFactory' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Protocol/Factory/SecurityParametersFactory.php',
        'FreeDSx\\Snmp\\Protocol\\IdGeneratorTrait' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Protocol/IdGeneratorTrait.php',
        'FreeDSx\\Snmp\\Protocol\\ProtocolElementInterface' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Protocol/ProtocolElementInterface.php',
        'FreeDSx\\Snmp\\Protocol\\ProtocolTrait' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Protocol/ProtocolTrait.php',
        'FreeDSx\\Snmp\\Protocol\\SnmpEncoder' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Protocol/SnmpEncoder.php',
        'FreeDSx\\Snmp\\Protocol\\TrapProtocolHandler' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Protocol/TrapProtocolHandler.php',
        'FreeDSx\\Snmp\\Request\\GetBulkRequest' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Request/GetBulkRequest.php',
        'FreeDSx\\Snmp\\Request\\GetNextRequest' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Request/GetNextRequest.php',
        'FreeDSx\\Snmp\\Request\\GetRequest' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Request/GetRequest.php',
        'FreeDSx\\Snmp\\Request\\InformRequest' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Request/InformRequest.php',
        'FreeDSx\\Snmp\\Request\\RequestInterface' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Request/RequestInterface.php',
        'FreeDSx\\Snmp\\Request\\RequestTrait' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Request/RequestTrait.php',
        'FreeDSx\\Snmp\\Request\\SetRequest' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Request/SetRequest.php',
        'FreeDSx\\Snmp\\Request\\TrapTrait' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Request/TrapTrait.php',
        'FreeDSx\\Snmp\\Request\\TrapV1Request' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Request/TrapV1Request.php',
        'FreeDSx\\Snmp\\Request\\TrapV2Request' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Request/TrapV2Request.php',
        'FreeDSx\\Snmp\\Requests' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Requests.php',
        'FreeDSx\\Snmp\\Response\\ReportResponse' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Response/ReportResponse.php',
        'FreeDSx\\Snmp\\Response\\Response' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Response/Response.php',
        'FreeDSx\\Snmp\\Response\\ResponseInterface' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Response/ResponseInterface.php',
        'FreeDSx\\Snmp\\Server\\ServerRunner\\ServerRunnerInterface' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Server/ServerRunner/ServerRunnerInterface.php',
        'FreeDSx\\Snmp\\Server\\ServerRunner\\TrapServerRunner' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Server/ServerRunner/TrapServerRunner.php',
        'FreeDSx\\Snmp\\SnmpClient' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/SnmpClient.php',
        'FreeDSx\\Snmp\\SnmpWalk' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/SnmpWalk.php',
        'FreeDSx\\Snmp\\TrapSink' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/TrapSink.php',
        'FreeDSx\\Snmp\\Trap\\TrapContext' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Trap/TrapContext.php',
        'FreeDSx\\Snmp\\Trap\\TrapListenerInterface' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Trap/TrapListenerInterface.php',
        'FreeDSx\\Snmp\\Value\\AbstractValue' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Value/AbstractValue.php',
        'FreeDSx\\Snmp\\Value\\ArbitraryValue' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Value/ArbitraryValue.php',
        'FreeDSx\\Snmp\\Value\\BigCounterValue' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Value/BigCounterValue.php',
        'FreeDSx\\Snmp\\Value\\CounterValue' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Value/CounterValue.php',
        'FreeDSx\\Snmp\\Value\\IntegerValue' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Value/IntegerValue.php',
        'FreeDSx\\Snmp\\Value\\IpAddressValue' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Value/IpAddressValue.php',
        'FreeDSx\\Snmp\\Value\\OidValue' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Value/OidValue.php',
        'FreeDSx\\Snmp\\Value\\StringValue' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Value/StringValue.php',
        'FreeDSx\\Snmp\\Value\\TimeTicksValue' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Value/TimeTicksValue.php',
        'FreeDSx\\Snmp\\Value\\UnsignedIntegerValue' => __DIR__ . '/..' . '/freedsx/snmp/src/FreeDSx/Snmp/Value/UnsignedIntegerValue.php',
        'FreeDSx\\Socket\\Exception\\ConnectionException' => __DIR__ . '/..' . '/freedsx/socket/src/FreeDSx/Socket/Exception/ConnectionException.php',
        'FreeDSx\\Socket\\Exception\\PartialMessageException' => __DIR__ . '/..' . '/freedsx/socket/src/FreeDSx/Socket/Exception/PartialMessageException.php',
        'FreeDSx\\Socket\\MessageQueue' => __DIR__ . '/..' . '/freedsx/socket/src/FreeDSx/Socket/MessageQueue.php',
        'FreeDSx\\Socket\\PduInterface' => __DIR__ . '/..' . '/freedsx/socket/src/FreeDSx/Socket/PduInterface.php',
        'FreeDSx\\Socket\\Queue\\Asn1MessageQueue' => __DIR__ . '/..' . '/freedsx/socket/src/FreeDSx/Socket/Queue/Asn1MessageQueue.php',
        'FreeDSx\\Socket\\Queue\\Message' => __DIR__ . '/..' . '/freedsx/socket/src/FreeDSx/Socket/Queue/Message.php',
        'FreeDSx\\Socket\\Queue\\MessageQueue' => __DIR__ . '/..' . '/freedsx/socket/src/FreeDSx/Socket/Queue/MessageQueue.php',
        'FreeDSx\\Socket\\Socket' => __DIR__ . '/..' . '/freedsx/socket/src/FreeDSx/Socket/Socket.php',
        'FreeDSx\\Socket\\SocketPool' => __DIR__ . '/..' . '/freedsx/socket/src/FreeDSx/Socket/SocketPool.php',
        'FreeDSx\\Socket\\SocketServer' => __DIR__ . '/..' . '/freedsx/socket/src/FreeDSx/Socket/SocketServer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf05cfa02d76c20d6a6b13424c8731ba9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf05cfa02d76c20d6a6b13424c8731ba9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf05cfa02d76c20d6a6b13424c8731ba9::$classMap;

        }, null, ClassLoader::class);
    }
}
