<?php
/**
 *
 * @author Sacheen Dhanjie
 * Lists of http codes
 *
 */
namespace SD\RestHookBundle\Util;


class Codes
{

    const HTTP_CONTINUE = 100;
    const HTTP_SWITCHING_PROTOCOLS = 101;
    const HTTP_PROCESSING = 102;
    const HTTP_OK = 200;
    const HTTP_CREATED = 201;
    const HTTP_ACCEPTED = 202;
    const HTTP_NON_AUTHORITATIVE_INFORMATION = 203;
    const HTTP_NO_CONTENT = 204;
    const HTTP_RESET_CONTENT = 205;
    const HTTP_PARTIAL_CONTENT = 206;
    const HTTP_MULTI_STATUS = 207;
    const HTTP_ALREADY_REPORTED = 208;
    const HTTP_IM_USED = 226;
    const HTTP_MULTIPLE_CHOICES = 300;
    const HTTP_MOVED_PERMANENTLY = 301;
    const HTTP_FOUND = 302;
    const HTTP_SEE_OTHER = 303;
    const HTTP_NOT_MODIFIED = 304;
    const HTTP_USE_PROXY = 305;
    const HTTP_RESERVED = 306;
    const HTTP_TEMPORARY_REDIRECT = 307;
    const HTTP_PERMANENTLY_REDIRECT = 308;
    const HTTP_BAD_REQUEST = 400;
    const HTTP_UNAUTHORIZED = 401;
    const HTTP_PAYMENT_REQUIRED = 402;
    const HTTP_FORBIDDEN = 403;
    const HTTP_NOT_FOUND = 404;
    const HTTP_METHOD_NOT_ALLOWED = 405;
    const HTTP_NOT_ACCEPTABLE = 406;
    const HTTP_PROXY_AUTHENTICATION_REQUIRED = 407;
    const HTTP_REQUEST_TIMEOUT = 408;
    const HTTP_CONFLICT = 409;
    const HTTP_GONE = 410;
    const HTTP_LENGTH_REQUIRED = 411;
    const HTTP_PRECONDITION_FAILED = 412;
    const HTTP_REQUEST_ENTITY_TOO_LARGE = 413;
    const HTTP_REQUEST_URI_TOO_LONG = 414;
    const HTTP_UNSUPPORTED_MEDIA_TYPE = 415;
    const HTTP_REQUESTED_RANGE_NOT_SATISFIABLE = 416;
    const HTTP_EXPECTATION_FAILED = 417;
    const HTTP_I_AM_A_TEAPOT = 418;
    const HTTP_UNPROCESSABLE_ENTITY = 422;
    const HTTP_LOCKED = 423;
    const HTTP_FAILED_DEPENDENCY = 424;
    const HTTP_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL = 425;
    const HTTP_UPGRADE_REQUIRED = 426;
    const HTTP_PRECONDITION_REQUIRED = 428;
    const HTTP_TOO_MANY_REQUESTS = 429;
    const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    const HTTP_INTERNAL_SERVER_ERROR = 500;
    const HTTP_NOT_IMPLEMENTED = 501;
    const HTTP_BAD_GATEWAY = 502;
    const HTTP_SERVICE_UNAVAILABLE = 503;
    const HTTP_GATEWAY_TIMEOUT = 504;
    const HTTP_VERSION_NOT_SUPPORTED = 505;
    const HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL = 506;
    const HTTP_INSUFFICIENT_STORAGE = 507;
    const HTTP_LOOP_DETECTED = 508;
    const HTTP_NOT_EXTENDED = 510;
    const HTTP_NETWORK_AUTHENTICATION_REQUIRED = 511;

    public static $codeMap = Array("Continue" => 100, "Switching Protocols" => 101, "Processing" => 102, "Ok" => 200, "Created" => 201, "Accepted" => 202, "Non Authoritative Information" => 203, "No Content" => 204, "Reset Content" => 205, "Partial Content" => 206, "Multi Status" => 207, "Already Reported" => 208, "Im Used" => 226, "Multiple Choices" => 300, "Moved Permanently" => 301, "Found" => 302, "See Other" => 303, "Not Modified" => 304, "Use Proxy" => 305, "Reserved" => 306, "Temporary Redirect" => 307, "Permanently Redirect" => 308, "Bad Request" => 400, "Unauthorized" => 401, "Payment Required" => 402, "Forbidden" => 403, "Not Found" => 404, "Method Not Allowed" => 405, "Not Acceptable" => 406, "Proxy Authentication Required" => 407, "Request Timeout" => 408, "Conflict" => 409, "Gone" => 410, "Length Required" => 411, "Precondition Failed" => 412, "Request Entity Too Large" => 413, "Request Uri Too Long" => 414, "Unsupported Media Type" => 415, "Requested Range Not Satisfiable" => 416, "Expectation Failed" => 417, "I Am A Teapot" => 418, "Unprocessable Entity" => 422, "Locked " => 423, "Failed Dependency" => 424, "Reserved For Webdav Advanced Collections Expired Proposal" => 425, "Upgrade Required" => 426, "Precondition Required" => 428, "Too Many Requests" => 429, "Request Header Fields Too Large" => 431, "Internal Server Error" => 500, "Not Implemented" => 501, "Bad Gateway" => 502, "Service Unavailable" => 503, "Gateway Timeout" => 504, "Version Not Supported" => 505, "Variant Also Negotiates Experimental" => 506, "Insufficient Storage" => 507, "Loop Detected" => 508, "Not Extended" => 510, "Network Authentication Required" => 511);

    public static function getCodeMessage($code)
    {
        $flipCode = array_flip(self::$codeMap);
        if (isset($flipCode[$code])) {
            return $flipCode[$code];
        }

        return "ERROR";
    }
}