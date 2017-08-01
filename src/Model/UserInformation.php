<?php
/**
 * UserInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;

/**
 * UserInformation Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'userInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_management_granular' => '\DocuSign\eSign\Model\UserAccountManagementGranularInformation',
        'activation_access_code' => 'string',
        'created_date_time' => 'string',
        'custom_settings' => '\DocuSign\eSign\Model\NameValue[]',
        'email' => 'string',
        'enable_connect_for_user' => 'string',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails',
        'first_name' => 'string',
        'forgotten_password_info' => '\DocuSign\eSign\Model\ForgottenPasswordInformation',
        'group_list' => '\DocuSign\eSign\Model\Group[]',
        'home_address' => '\DocuSign\eSign\Model\AddressInformationV2',
        'initials_image_uri' => 'string',
        'is_admin' => 'string',
        'last_login' => 'string',
        'last_name' => 'string',
        'login_status' => 'string',
        'middle_name' => 'string',
        'password' => 'string',
        'password_expiration' => 'string',
        'permission_profile_id' => 'string',
        'permission_profile_name' => 'string',
        'profile_image_uri' => 'string',
        'send_activation_on_invalid_login' => 'string',
        'signature_image_uri' => 'string',
        'suffix_name' => 'string',
        'title' => 'string',
        'uri' => 'string',
        'user_id' => 'string',
        'user_name' => 'string',
        'user_profile_last_modified_date' => 'string',
        'user_settings' => '\DocuSign\eSign\Model\NameValue[]',
        'user_status' => 'string',
        'user_type' => 'string',
        'work_address' => '\DocuSign\eSign\Model\AddressInformationV2'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'account_management_granular' => 'accountManagementGranular',
        'activation_access_code' => 'activationAccessCode',
        'created_date_time' => 'createdDateTime',
        'custom_settings' => 'customSettings',
        'email' => 'email',
        'enable_connect_for_user' => 'enableConnectForUser',
        'error_details' => 'errorDetails',
        'first_name' => 'firstName',
        'forgotten_password_info' => 'forgottenPasswordInfo',
        'group_list' => 'groupList',
        'home_address' => 'homeAddress',
        'initials_image_uri' => 'initialsImageUri',
        'is_admin' => 'isAdmin',
        'last_login' => 'lastLogin',
        'last_name' => 'lastName',
        'login_status' => 'loginStatus',
        'middle_name' => 'middleName',
        'password' => 'password',
        'password_expiration' => 'passwordExpiration',
        'permission_profile_id' => 'permissionProfileId',
        'permission_profile_name' => 'permissionProfileName',
        'profile_image_uri' => 'profileImageUri',
        'send_activation_on_invalid_login' => 'sendActivationOnInvalidLogin',
        'signature_image_uri' => 'signatureImageUri',
        'suffix_name' => 'suffixName',
        'title' => 'title',
        'uri' => 'uri',
        'user_id' => 'userId',
        'user_name' => 'userName',
        'user_profile_last_modified_date' => 'userProfileLastModifiedDate',
        'user_settings' => 'userSettings',
        'user_status' => 'userStatus',
        'user_type' => 'userType',
        'work_address' => 'workAddress'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'account_management_granular' => 'setAccountManagementGranular',
        'activation_access_code' => 'setActivationAccessCode',
        'created_date_time' => 'setCreatedDateTime',
        'custom_settings' => 'setCustomSettings',
        'email' => 'setEmail',
        'enable_connect_for_user' => 'setEnableConnectForUser',
        'error_details' => 'setErrorDetails',
        'first_name' => 'setFirstName',
        'forgotten_password_info' => 'setForgottenPasswordInfo',
        'group_list' => 'setGroupList',
        'home_address' => 'setHomeAddress',
        'initials_image_uri' => 'setInitialsImageUri',
        'is_admin' => 'setIsAdmin',
        'last_login' => 'setLastLogin',
        'last_name' => 'setLastName',
        'login_status' => 'setLoginStatus',
        'middle_name' => 'setMiddleName',
        'password' => 'setPassword',
        'password_expiration' => 'setPasswordExpiration',
        'permission_profile_id' => 'setPermissionProfileId',
        'permission_profile_name' => 'setPermissionProfileName',
        'profile_image_uri' => 'setProfileImageUri',
        'send_activation_on_invalid_login' => 'setSendActivationOnInvalidLogin',
        'signature_image_uri' => 'setSignatureImageUri',
        'suffix_name' => 'setSuffixName',
        'title' => 'setTitle',
        'uri' => 'setUri',
        'user_id' => 'setUserId',
        'user_name' => 'setUserName',
        'user_profile_last_modified_date' => 'setUserProfileLastModifiedDate',
        'user_settings' => 'setUserSettings',
        'user_status' => 'setUserStatus',
        'user_type' => 'setUserType',
        'work_address' => 'setWorkAddress'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'account_management_granular' => 'getAccountManagementGranular',
        'activation_access_code' => 'getActivationAccessCode',
        'created_date_time' => 'getCreatedDateTime',
        'custom_settings' => 'getCustomSettings',
        'email' => 'getEmail',
        'enable_connect_for_user' => 'getEnableConnectForUser',
        'error_details' => 'getErrorDetails',
        'first_name' => 'getFirstName',
        'forgotten_password_info' => 'getForgottenPasswordInfo',
        'group_list' => 'getGroupList',
        'home_address' => 'getHomeAddress',
        'initials_image_uri' => 'getInitialsImageUri',
        'is_admin' => 'getIsAdmin',
        'last_login' => 'getLastLogin',
        'last_name' => 'getLastName',
        'login_status' => 'getLoginStatus',
        'middle_name' => 'getMiddleName',
        'password' => 'getPassword',
        'password_expiration' => 'getPasswordExpiration',
        'permission_profile_id' => 'getPermissionProfileId',
        'permission_profile_name' => 'getPermissionProfileName',
        'profile_image_uri' => 'getProfileImageUri',
        'send_activation_on_invalid_login' => 'getSendActivationOnInvalidLogin',
        'signature_image_uri' => 'getSignatureImageUri',
        'suffix_name' => 'getSuffixName',
        'title' => 'getTitle',
        'uri' => 'getUri',
        'user_id' => 'getUserId',
        'user_name' => 'getUserName',
        'user_profile_last_modified_date' => 'getUserProfileLastModifiedDate',
        'user_settings' => 'getUserSettings',
        'user_status' => 'getUserStatus',
        'user_type' => 'getUserType',
        'work_address' => 'getWorkAddress'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['account_management_granular'] = isset($data['account_management_granular']) ? $data['account_management_granular'] : null;
        $this->container['activation_access_code'] = isset($data['activation_access_code']) ? $data['activation_access_code'] : null;
        $this->container['created_date_time'] = isset($data['created_date_time']) ? $data['created_date_time'] : null;
        $this->container['custom_settings'] = isset($data['custom_settings']) ? $data['custom_settings'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['enable_connect_for_user'] = isset($data['enable_connect_for_user']) ? $data['enable_connect_for_user'] : null;
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['forgotten_password_info'] = isset($data['forgotten_password_info']) ? $data['forgotten_password_info'] : null;
        $this->container['group_list'] = isset($data['group_list']) ? $data['group_list'] : null;
        $this->container['home_address'] = isset($data['home_address']) ? $data['home_address'] : null;
        $this->container['initials_image_uri'] = isset($data['initials_image_uri']) ? $data['initials_image_uri'] : null;
        $this->container['is_admin'] = isset($data['is_admin']) ? $data['is_admin'] : null;
        $this->container['last_login'] = isset($data['last_login']) ? $data['last_login'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['login_status'] = isset($data['login_status']) ? $data['login_status'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['password_expiration'] = isset($data['password_expiration']) ? $data['password_expiration'] : null;
        $this->container['permission_profile_id'] = isset($data['permission_profile_id']) ? $data['permission_profile_id'] : null;
        $this->container['permission_profile_name'] = isset($data['permission_profile_name']) ? $data['permission_profile_name'] : null;
        $this->container['profile_image_uri'] = isset($data['profile_image_uri']) ? $data['profile_image_uri'] : null;
        $this->container['send_activation_on_invalid_login'] = isset($data['send_activation_on_invalid_login']) ? $data['send_activation_on_invalid_login'] : null;
        $this->container['signature_image_uri'] = isset($data['signature_image_uri']) ? $data['signature_image_uri'] : null;
        $this->container['suffix_name'] = isset($data['suffix_name']) ? $data['suffix_name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['user_profile_last_modified_date'] = isset($data['user_profile_last_modified_date']) ? $data['user_profile_last_modified_date'] : null;
        $this->container['user_settings'] = isset($data['user_settings']) ? $data['user_settings'] : null;
        $this->container['user_status'] = isset($data['user_status']) ? $data['user_status'] : null;
        $this->container['user_type'] = isset($data['user_type']) ? $data['user_type'] : null;
        $this->container['work_address'] = isset($data['work_address']) ? $data['work_address'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets account_management_granular
     * @return \DocuSign\eSign\Model\UserAccountManagementGranularInformation
     */
    public function getAccountManagementGranular()
    {
        return $this->container['account_management_granular'];
    }

    /**
     * Sets account_management_granular
     * @param \DocuSign\eSign\Model\UserAccountManagementGranularInformation $account_management_granular
     * @return $this
     */
    public function setAccountManagementGranular($account_management_granular)
    {
        $this->container['account_management_granular'] = $account_management_granular;

        return $this;
    }

    /**
     * Gets activation_access_code
     * @return string
     */
    public function getActivationAccessCode()
    {
        return $this->container['activation_access_code'];
    }

    /**
     * Sets activation_access_code
     * @param string $activation_access_code The activation code the new user must enter when activating their account.
     * @return $this
     */
    public function setActivationAccessCode($activation_access_code)
    {
        $this->container['activation_access_code'] = $activation_access_code;

        return $this;
    }

    /**
     * Gets created_date_time
     * @return string
     */
    public function getCreatedDateTime()
    {
        return $this->container['created_date_time'];
    }

    /**
     * Sets created_date_time
     * @param string $created_date_time Indicates the date and time the item was created.
     * @return $this
     */
    public function setCreatedDateTime($created_date_time)
    {
        $this->container['created_date_time'] = $created_date_time;

        return $this;
    }

    /**
     * Gets custom_settings
     * @return \DocuSign\eSign\Model\NameValue[]
     */
    public function getCustomSettings()
    {
        return $this->container['custom_settings'];
    }

    /**
     * Sets custom_settings
     * @param \DocuSign\eSign\Model\NameValue[] $custom_settings The name/value pair information for the user custom setting.
     * @return $this
     */
    public function setCustomSettings($custom_settings)
    {
        $this->container['custom_settings'] = $custom_settings;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email 
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets enable_connect_for_user
     * @return string
     */
    public function getEnableConnectForUser()
    {
        return $this->container['enable_connect_for_user'];
    }

    /**
     * Sets enable_connect_for_user
     * @param string $enable_connect_for_user Specifies whether the user is enabled for updates from DocuSign Connect. Valid values: true or false.
     * @return $this
     */
    public function setEnableConnectForUser($enable_connect_for_user)
    {
        $this->container['enable_connect_for_user'] = $enable_connect_for_user;

        return $this;
    }

    /**
     * Gets error_details
     * @return \DocuSign\eSign\Model\ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     * @param \DocuSign\eSign\Model\ErrorDetails $error_details
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name The user’s first name.  Maximum Length: 50 characters.
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets forgotten_password_info
     * @return \DocuSign\eSign\Model\ForgottenPasswordInformation
     */
    public function getForgottenPasswordInfo()
    {
        return $this->container['forgotten_password_info'];
    }

    /**
     * Sets forgotten_password_info
     * @param \DocuSign\eSign\Model\ForgottenPasswordInformation $forgotten_password_info
     * @return $this
     */
    public function setForgottenPasswordInfo($forgotten_password_info)
    {
        $this->container['forgotten_password_info'] = $forgotten_password_info;

        return $this;
    }

    /**
     * Gets group_list
     * @return \DocuSign\eSign\Model\Group[]
     */
    public function getGroupList()
    {
        return $this->container['group_list'];
    }

    /**
     * Sets group_list
     * @param \DocuSign\eSign\Model\Group[] $group_list A list of the group information for groups to add the user to. Group information can be found by calling [ML:GET group information]. The only required parameter is groupId.   The parameters are:  * groupId – The DocuSign group ID for the group. * groupName – The name of the group * permissionProfileId – The ID of the permission profile associated with the group. * groupType – The group type.
     * @return $this
     */
    public function setGroupList($group_list)
    {
        $this->container['group_list'] = $group_list;

        return $this;
    }

    /**
     * Gets home_address
     * @return \DocuSign\eSign\Model\AddressInformationV2
     */
    public function getHomeAddress()
    {
        return $this->container['home_address'];
    }

    /**
     * Sets home_address
     * @param \DocuSign\eSign\Model\AddressInformationV2 $home_address
     * @return $this
     */
    public function setHomeAddress($home_address)
    {
        $this->container['home_address'] = $home_address;

        return $this;
    }

    /**
     * Gets initials_image_uri
     * @return string
     */
    public function getInitialsImageUri()
    {
        return $this->container['initials_image_uri'];
    }

    /**
     * Sets initials_image_uri
     * @param string $initials_image_uri Contains the URI for an endpoint that you can use to retrieve the initials image.
     * @return $this
     */
    public function setInitialsImageUri($initials_image_uri)
    {
        $this->container['initials_image_uri'] = $initials_image_uri;

        return $this;
    }

    /**
     * Gets is_admin
     * @return string
     */
    public function getIsAdmin()
    {
        return $this->container['is_admin'];
    }

    /**
     * Sets is_admin
     * @param string $is_admin Determines if the feature set is actively set as part of the plan.
     * @return $this
     */
    public function setIsAdmin($is_admin)
    {
        $this->container['is_admin'] = $is_admin;

        return $this;
    }

    /**
     * Gets last_login
     * @return string
     */
    public function getLastLogin()
    {
        return $this->container['last_login'];
    }

    /**
     * Sets last_login
     * @param string $last_login Shows the date-time when the user last logged on to the system.
     * @return $this
     */
    public function setLastLogin($last_login)
    {
        $this->container['last_login'] = $last_login;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name The user’s last name.  Maximum Length: 50 characters.
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets login_status
     * @return string
     */
    public function getLoginStatus()
    {
        return $this->container['login_status'];
    }

    /**
     * Sets login_status
     * @param string $login_status Shows the current status of the user’s password. Possible values are:   * password_reset * password_active * password_expired * password_locked * password_reset_failed
     * @return $this
     */
    public function setLoginStatus($login_status)
    {
        $this->container['login_status'] = $login_status;

        return $this;
    }

    /**
     * Gets middle_name
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     * @param string $middle_name The user’s middle name.  Maximum Length: 50 characters.
     * @return $this
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password 
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets password_expiration
     * @return string
     */
    public function getPasswordExpiration()
    {
        return $this->container['password_expiration'];
    }

    /**
     * Sets password_expiration
     * @param string $password_expiration 
     * @return $this
     */
    public function setPasswordExpiration($password_expiration)
    {
        $this->container['password_expiration'] = $password_expiration;

        return $this;
    }

    /**
     * Gets permission_profile_id
     * @return string
     */
    public function getPermissionProfileId()
    {
        return $this->container['permission_profile_id'];
    }

    /**
     * Sets permission_profile_id
     * @param string $permission_profile_id 
     * @return $this
     */
    public function setPermissionProfileId($permission_profile_id)
    {
        $this->container['permission_profile_id'] = $permission_profile_id;

        return $this;
    }

    /**
     * Gets permission_profile_name
     * @return string
     */
    public function getPermissionProfileName()
    {
        return $this->container['permission_profile_name'];
    }

    /**
     * Sets permission_profile_name
     * @param string $permission_profile_name 
     * @return $this
     */
    public function setPermissionProfileName($permission_profile_name)
    {
        $this->container['permission_profile_name'] = $permission_profile_name;

        return $this;
    }

    /**
     * Gets profile_image_uri
     * @return string
     */
    public function getProfileImageUri()
    {
        return $this->container['profile_image_uri'];
    }

    /**
     * Sets profile_image_uri
     * @param string $profile_image_uri 
     * @return $this
     */
    public function setProfileImageUri($profile_image_uri)
    {
        $this->container['profile_image_uri'] = $profile_image_uri;

        return $this;
    }

    /**
     * Gets send_activation_on_invalid_login
     * @return string
     */
    public function getSendActivationOnInvalidLogin()
    {
        return $this->container['send_activation_on_invalid_login'];
    }

    /**
     * Sets send_activation_on_invalid_login
     * @param string $send_activation_on_invalid_login When set to **true**, specifies that an additional activation email is sent to the user if they fail a log on before activating their account.
     * @return $this
     */
    public function setSendActivationOnInvalidLogin($send_activation_on_invalid_login)
    {
        $this->container['send_activation_on_invalid_login'] = $send_activation_on_invalid_login;

        return $this;
    }

    /**
     * Gets signature_image_uri
     * @return string
     */
    public function getSignatureImageUri()
    {
        return $this->container['signature_image_uri'];
    }

    /**
     * Sets signature_image_uri
     * @param string $signature_image_uri Contains the URI for an endpoint that you can use to retrieve the signature image.
     * @return $this
     */
    public function setSignatureImageUri($signature_image_uri)
    {
        $this->container['signature_image_uri'] = $signature_image_uri;

        return $this;
    }

    /**
     * Gets suffix_name
     * @return string
     */
    public function getSuffixName()
    {
        return $this->container['suffix_name'];
    }

    /**
     * Sets suffix_name
     * @param string $suffix_name The suffix for the user's name.   Maximum Length: 50 characters.
     * @return $this
     */
    public function setSuffixName($suffix_name)
    {
        $this->container['suffix_name'] = $suffix_name;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title The title of the user.
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets uri
     * @return string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     * @param string $uri 
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets user_id
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param string $user_id 
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets user_name
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     * @param string $user_name 
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets user_profile_last_modified_date
     * @return string
     */
    public function getUserProfileLastModifiedDate()
    {
        return $this->container['user_profile_last_modified_date'];
    }

    /**
     * Sets user_profile_last_modified_date
     * @param string $user_profile_last_modified_date 
     * @return $this
     */
    public function setUserProfileLastModifiedDate($user_profile_last_modified_date)
    {
        $this->container['user_profile_last_modified_date'] = $user_profile_last_modified_date;

        return $this;
    }

    /**
     * Gets user_settings
     * @return \DocuSign\eSign\Model\NameValue[]
     */
    public function getUserSettings()
    {
        return $this->container['user_settings'];
    }

    /**
     * Sets user_settings
     * @param \DocuSign\eSign\Model\NameValue[] $user_settings The name/value pair information for user settings. These determine the actions that a user can take in the account. The `[ML:userSettings]` are listed and described below.
     * @return $this
     */
    public function setUserSettings($user_settings)
    {
        $this->container['user_settings'] = $user_settings;

        return $this;
    }

    /**
     * Gets user_status
     * @return string
     */
    public function getUserStatus()
    {
        return $this->container['user_status'];
    }

    /**
     * Sets user_status
     * @param string $user_status 
     * @return $this
     */
    public function setUserStatus($user_status)
    {
        $this->container['user_status'] = $user_status;

        return $this;
    }

    /**
     * Gets user_type
     * @return string
     */
    public function getUserType()
    {
        return $this->container['user_type'];
    }

    /**
     * Sets user_type
     * @param string $user_type 
     * @return $this
     */
    public function setUserType($user_type)
    {
        $this->container['user_type'] = $user_type;

        return $this;
    }

    /**
     * Gets work_address
     * @return \DocuSign\eSign\Model\AddressInformationV2
     */
    public function getWorkAddress()
    {
        return $this->container['work_address'];
    }

    /**
     * Sets work_address
     * @param \DocuSign\eSign\Model\AddressInformationV2 $work_address
     * @return $this
     */
    public function setWorkAddress($work_address)
    {
        $this->container['work_address'] = $work_address;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this));
    }
}

