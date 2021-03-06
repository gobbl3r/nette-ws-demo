<?php
use Ratchet\ComponentInterface;
use Ratchet\ConnectionInterface;
/**
 * MyApp
 *
 * @author Martin
 */
class MyApp implements Ratchet\Wamp\WampServerInterface
{
	/**
     * An RPC call has been received
     * @param Ratchet\ConnectionInterface
     * @param string The unique ID of the RPC, required to respond to
     * @param string The topic to execute the call against
     * @param array Call parameters received from the client
     */
    function onCall(ConnectionInterface $conn, $id, $topic, array $params)
	{
		
	}

    /**
     * A request to subscribe to a topic has been made
     * @param Ratchet\ConnectionInterface
     * @param string The topic to subscribe to
     */
    function onSubscribe(ConnectionInterface $conn, $topic)
	{
		
	}

    /**
     * A request to unsubscribe from a topic has been made
     * @param Ratchet\ConnectionInterface
     * @param The topic to unsubscribe from
     */
    function onUnSubscribe(ConnectionInterface $conn, $topic)
	{
		
	}

    /**
     * A client is attempting to publish content to a subscribed connections on a URI
     * @param Ratchet\ConnectionInterface
     * @param The topic the user has attempted to publish to
     * @param string Payload of the publish
     * @param array A list of session IDs the message should be excluded from (blacklist)
     * @param array A list of session Ids the message should be send to (whitelist)
     */
    function onPublish(ConnectionInterface $conn, $topic, $event, array $exclude = array(), array $eligible = array())
	{
		
	}
	
	/**
     * When a new connection is opened it will be passed to this method
     * @param Ratchet\Connection The socket/connection that just connected to your application
     * @throws Exception
     */
    function onOpen(ConnectionInterface $conn)
	{
		dump($conn->session);
	}

    /**
     * This is called before or after a socket is closed (depends on how it's closed).  SendMessage to $conn will not result in an error if it has already been closed.
     * @param Ratchet\Connection The socket/connection that is closing/closed
     * @throws Exception
     */
    function onClose(ConnectionInterface $conn)
	{
		
	}

    /**
     * If there is an error with one of the sockets, or somewhere in the application where an Exception is thrown,
     * the Exception is sent back down the stack, handled by the Server and bubbled back up the application through this method
     * @param Ratchet\Connection
     * @param \Exception
     * @throws Exception
     */
    function onError(ConnectionInterface $conn, \Exception $e)
	{
		
	}
}
