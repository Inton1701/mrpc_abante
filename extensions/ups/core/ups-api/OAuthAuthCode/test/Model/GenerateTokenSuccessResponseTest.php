<?php
/**
 * GenerateTokenSuccessResponseTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\OAuthAuthCode
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OAuth Authorization Code API
 *
 * The UPS OAuth Authorization Code API helps integrate UPS services into your business application for providing the service your application grants your customers. For example, you can create UPS shipping labels with shipping rates for merchants from within your application. Since your application will not have access to your customer's UPS login credentials, the OAuth authorization code flow is used to let your customer use their UPS credentials, within your application, in a simple and secure way.  Key Business Values: - **Enhanced Transaction Security**: The OAuth Authorization Code flow is more secure and reliable since the access token and the refresh token are never exposed in the browser's URL, thus reducing the risk of leakage or theft. - **Operational Efficiency**: With the ability to obtain a refresh token when the token expires, your application can maintain a long-term and uninterrupted access to the protected resources, without requiring the user to re-authenticate or re-login.  Overview of steps in OAuth Authorization Code flow: (1) When user selects Login, the client application redirects to the authorization server's /authorize endpoint. (2) The Authorization Server authenticates the user by asking for their login credentials, and after successful login, the authorization server responds back to the application with an authorization code contained within a redirection URI. (3) The application then sends the authorization code and the redirection URI to the authorization server's /oauth/token endpoint. (4) The authorization server's /token endpoint verifies the authorization code and the application's client ID contained in the redirect URI, and responds with a with an access token, as well as a refresh token. (5) The Client application uses the access token to request information from an UPS API.  - <a href=\"https://developer.ups.com/api/reference/oauth/authorization-code\" target=\"_blank\" rel=\"noopener\">Setting-up OAuth Authorization Code flow</a> - <a href=\"https://github.com/UPS-API\" target=\"_blank\" rel=\"noopener noreferrer\">Sample integration code on GitHub</a>
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.50
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace UPS\OAuthAuthCode;

use PHPUnit\Framework\TestCase;

/**
 * GenerateTokenSuccessResponseTest Class Doc Comment
 *
 * @category    Class
 * @description GenerateTokenSuccessResponse
 * @package     UPS\OAuthAuthCode
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GenerateTokenSuccessResponseTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "GenerateTokenSuccessResponse"
     */
    public function testGenerateTokenSuccessResponse()
    {
    }

    /**
     * Test attribute "refresh_token_expires_in"
     */
    public function testPropertyRefreshTokenExpiresIn()
    {
    }

    /**
     * Test attribute "refresh_token_status"
     */
    public function testPropertyRefreshTokenStatus()
    {
    }

    /**
     * Test attribute "token_type"
     */
    public function testPropertyTokenType()
    {
    }

    /**
     * Test attribute "issued_at"
     */
    public function testPropertyIssuedAt()
    {
    }

    /**
     * Test attribute "client_id"
     */
    public function testPropertyClientId()
    {
    }

    /**
     * Test attribute "access_token"
     */
    public function testPropertyAccessToken()
    {
    }

    /**
     * Test attribute "refresh_token"
     */
    public function testPropertyRefreshToken()
    {
    }

    /**
     * Test attribute "scope"
     */
    public function testPropertyScope()
    {
    }

    /**
     * Test attribute "refresh_token_issued_at"
     */
    public function testPropertyRefreshTokenIssuedAt()
    {
    }

    /**
     * Test attribute "expires_in"
     */
    public function testPropertyExpiresIn()
    {
    }

    /**
     * Test attribute "refresh_count"
     */
    public function testPropertyRefreshCount()
    {
    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
    }
}
