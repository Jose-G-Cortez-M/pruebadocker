<?php

namespace ContainerRB5zbmO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_Listener_Remove_ProductImageService extends App_KernelProdContainer
{
    /*
     * Gets the private 'vich_uploader.listener.remove.product_image' shared service.
     *
     * @return \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['vich_uploader.listener.remove.product_image'] = new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('product_image', ($container->privates['vich_uploader.adapter.orm'] ?? ($container->privates['vich_uploader.adapter.orm'] = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter())), ($container->privates['vich_uploader.metadata_reader'] ?? $container->load('getVichUploader_MetadataReaderService')), ($container->services['vich_uploader.upload_handler'] ?? $container->load('getVichUploader_UploadHandlerService')));
    }
}
