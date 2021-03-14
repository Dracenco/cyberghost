{{--Main page. Made of multiple children elements that can be ignored at will--}}
@extends('layout\app', ['ip' => $data['header']])


@include('layout.banner-red',['banner' => $data['banner']])
@include('layout.title-over-three-images',['three_images' => $data['three_images']])
@include('layout.text-image-text',['text_image' => $data['text_image_text']])
@include('layout.right-side-section',['right_section' => $data['right_section']])
@include('layout.left-side-section',['left_section' => $data['left_section']])
@include('layout.pricing-widget',['pricing_widget' => $data['pricing_widget']])

