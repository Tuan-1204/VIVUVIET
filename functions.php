<?php
// functions.php - common utilities
require_once __DIR__ . '/config.php';

/**
 * Escape output for HTML
 */
function escape($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

/**
 * Retrieve latest posts
 */
function getPosts($limit = 10, $offset = 0)
{
    $stmt = getPDO()->prepare('SELECT * FROM posts ORDER BY created_at DESC LIMIT ? OFFSET ?');
    $stmt->execute([$limit, $offset]);
    return $stmt->fetchAll();
}

/**
 * Fetch a single post by ID
 */
function getPost($id)
{
    $stmt = getPDO()->prepare('SELECT * FROM posts WHERE id = ?');
    $stmt->execute([$id]);
    return $stmt->fetch();
}

/**
 * Insert a contact message
 */
function saveContact($name, $email, $subject, $message)
{
    $stmt = getPDO()->prepare('INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)');
    return $stmt->execute([$name, $email, $subject, $message]);
}

/**
 * Simple authentication helpers (not production‑ready)
 */
function hashPassword($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}

function verifyPassword($password, $hash)
{
    return password_verify($password, $hash);
}

function currentUser()
{
    session_start();
    return $_SESSION['user'] ?? null;
}

function requireLogin()
{
    if (!currentUser()) {
        header('Location: index.php?page=login');
        exit;
    }
}
