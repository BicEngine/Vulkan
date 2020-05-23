<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Core;

/**
 * Interface Vulkan10ExtensionsInterface
 */
interface Vulkan10ExtensionsInterface
{
    /**
     * @var string
     */
    public const VK_KHR_SURFACE_EXTENSION_NAME = 'VK_KHR_surface';

    /**
     * @var string
     */
    public const VK_KHR_SWAPCHAIN_EXTENSION_NAME = 'VK_KHR_swapchain';

    /**
     * @var string
     */
    public const VK_KHR_DISPLAY_EXTENSION_NAME = 'VK_KHR_display';

    /**
     * @var string
     */
    public const VK_KHR_DISPLAY_SWAPCHAIN_EXTENSION_NAME = 'VK_KHR_display_swapchain';

    /**
     * @var string
     */
    public const VK_KHR_SAMPLER_MIRROR_CLAMP_TO_EDGE_EXTENSION_NAME = 'VK_KHR_sampler_mirror_clamp_to_edge';

    /**
     * @var string
     */
    public const VK_KHR_MULTIVIEW_EXTENSION_NAME = 'VK_KHR_multiview';

    /**
     * @var string
     */
    public const VK_KHR_GET_PHYSICAL_DEVICE_PROPERTIES_2_EXTENSION_NAME = 'VK_KHR_get_physical_device_properties2';

    /**
     * @var string
     */
    public const VK_KHR_DEVICE_GROUP_EXTENSION_NAME = 'VK_KHR_device_group';

    /**
     * @var string
     */
    public const VK_KHR_SHADER_DRAW_PARAMETERS_EXTENSION_NAME = 'VK_KHR_shader_draw_parameters';

    /**
     * @var string
     */
    public const VK_KHR_MAINTENANCE1_EXTENSION_NAME = 'VK_KHR_maintenance1';

    /**
     * @var string
     */
    public const VK_KHR_DEVICE_GROUP_CREATION_EXTENSION_NAME = 'VK_KHR_device_group_creation';

    /**
     * @var string
     */
    public const VK_KHR_EXTERNAL_MEMORY_CAPABILITIES_EXTENSION_NAME = 'VK_KHR_external_memory_capabilities';

    /**
     * @var string
     */
    public const VK_KHR_EXTERNAL_MEMORY_EXTENSION_NAME = 'VK_KHR_external_memory';

    /**
     * @var string
     */
    public const VK_KHR_EXTERNAL_MEMORY_FD_EXTENSION_NAME = 'VK_KHR_external_memory_fd';

    /**
     * @var string
     */
    public const VK_KHR_EXTERNAL_SEMAPHORE_CAPABILITIES_EXTENSION_NAME = 'VK_KHR_external_semaphore_capabilities';

    /**
     * @var string
     */
    public const VK_KHR_EXTERNAL_SEMAPHORE_EXTENSION_NAME = 'VK_KHR_external_semaphore';

    /**
     * @var string
     */
    public const VK_KHR_EXTERNAL_SEMAPHORE_FD_EXTENSION_NAME = 'VK_KHR_external_semaphore_fd';

    /**
     * @var string
     */
    public const VK_KHR_PUSH_DESCRIPTOR_EXTENSION_NAME = 'VK_KHR_push_descriptor';

    /**
     * @var string
     */
    public const VK_KHR_SHADER_FLOAT16_INT8_EXTENSION_NAME = 'VK_KHR_shader_float16_int8';

    /**
     * @var string
     */
    public const VK_KHR_16BIT_STORAGE_EXTENSION_NAME = 'VK_KHR_16bit_storage';

    /**
     * @var string
     */
    public const VK_KHR_INCREMENTAL_PRESENT_EXTENSION_NAME = 'VK_KHR_incremental_present';

    /**
     * @var string
     */
    public const VK_KHR_DESCRIPTOR_UPDATE_TEMPLATE_EXTENSION_NAME = 'VK_KHR_descriptor_update_template';

    /**
     * @var string
     */
    public const VK_KHR_IMAGELESS_FRAMEBUFFER_EXTENSION_NAME = 'VK_KHR_imageless_framebuffer';

    /**
     * @var string
     */
    public const VK_KHR_CREATE_RENDERPASS_2_EXTENSION_NAME = 'VK_KHR_create_renderpass2';

    /**
     * @var string
     */
    public const VK_KHR_SHARED_PRESENTABLE_IMAGE_EXTENSION_NAME = 'VK_KHR_shared_presentable_image';

    /**
     * @var string
     */
    public const VK_KHR_EXTERNAL_FENCE_CAPABILITIES_EXTENSION_NAME = 'VK_KHR_external_fence_capabilities';

    /**
     * @var string
     */
    public const VK_KHR_EXTERNAL_FENCE_EXTENSION_NAME = 'VK_KHR_external_fence';

    /**
     * @var string
     */
    public const VK_KHR_EXTERNAL_FENCE_FD_EXTENSION_NAME = 'VK_KHR_external_fence_fd';

    /**
     * @var string
     */
    public const VK_KHR_PERFORMANCE_QUERY_EXTENSION_NAME = 'VK_KHR_performance_query';

    /**
     * @var string
     */
    public const VK_KHR_MAINTENANCE2_EXTENSION_NAME = 'VK_KHR_maintenance2';

    /**
     * @var string
     */
    public const VK_KHR_VARIABLE_POINTERS_EXTENSION_NAME = 'VK_KHR_variable_pointers';

    /**
     * @var string
     */
    public const VK_KHR_GET_DISPLAY_PROPERTIES_2_EXTENSION_NAME = 'VK_KHR_get_display_properties2';

    /**
     * @var string
     */
    public const VK_KHR_DEDICATED_ALLOCATION_EXTENSION_NAME = 'VK_KHR_dedicated_allocation';

    /**
     * @var string
     */
    public const VK_KHR_STORAGE_BUFFER_STORAGE_CLASS_EXTENSION_NAME = 'VK_KHR_storage_buffer_storage_class';

    /**
     * @var string
     */
    public const VK_KHR_RELAXED_BLOCK_LAYOUT_EXTENSION_NAME = 'VK_KHR_relaxed_block_layout';

    /**
     * @var string
     */
    public const VK_KHR_GET_MEMORY_REQUIREMENTS_2_EXTENSION_NAME = 'VK_KHR_get_memory_requirements2';

    /**
     * @var string
     */
    public const VK_KHR_IMAGE_FORMAT_LIST_EXTENSION_NAME = 'VK_KHR_image_format_list';

    /**
     * @var string
     */
    public const VK_KHR_SAMPLER_YCBCR_CONVERSION_EXTENSION_NAME = 'VK_KHR_sampler_ycbcr_conversion';

    /**
     * @var string
     */
    public const VK_KHR_BIND_MEMORY_2_EXTENSION_NAME = 'VK_KHR_bind_memory2';

    /**
     * @var string
     */
    public const VK_KHR_MAINTENANCE3_EXTENSION_NAME = 'VK_KHR_maintenance3';

    /**
     * @var string
     */
    public const VK_KHR_DRAW_INDIRECT_COUNT_EXTENSION_NAME = 'VK_KHR_draw_indirect_count';

    /**
     * @var string
     */
    public const VK_KHR_8BIT_STORAGE_EXTENSION_NAME = 'VK_KHR_8bit_storage';

    /**
     * @var string
     */
    public const VK_KHR_SHADER_ATOMIC_INT64_EXTENSION_NAME = 'VK_KHR_shader_atomic_int64';

    /**
     * @var string
     */
    public const VK_KHR_SHADER_CLOCK_EXTENSION_NAME = 'VK_KHR_shader_clock';

    /**
     * @var string
     */
    public const VK_KHR_DRIVER_PROPERTIES_EXTENSION_NAME = 'VK_KHR_driver_properties';

    /**
     * @var string
     */
    public const VK_KHR_SHADER_FLOAT_CONTROLS_EXTENSION_NAME = 'VK_KHR_shader_float_controls';

    /**
     * @var string
     */
    public const VK_KHR_DEPTH_STENCIL_RESOLVE_EXTENSION_NAME = 'VK_KHR_depth_stencil_resolve';

    /**
     * @var string
     */
    public const VK_KHR_SWAPCHAIN_MUTABLE_FORMAT_EXTENSION_NAME = 'VK_KHR_swapchain_mutable_format';

    /**
     * @var string
     */
    public const VK_KHR_TIMELINE_SEMAPHORE_EXTENSION_NAME = 'VK_KHR_timeline_semaphore';

    /**
     * @var string
     */
    public const VK_KHR_VULKAN_MEMORY_MODEL_EXTENSION_NAME = 'VK_KHR_vulkan_memory_model';

    /**
     * @var string
     */
    public const VK_KHR_SURFACE_PROTECTED_CAPABILITIES_EXTENSION_NAME = 'VK_KHR_surface_protected_capabilities';

    /**
     * @var string
     */
    public const VK_KHR_SEPARATE_DEPTH_STENCIL_LAYOUTS_EXTENSION_NAME = 'VK_KHR_separate_depth_stencil_layouts';

    /**
     * @var string
     */
    public const VK_KHR_UNIFORM_BUFFER_STANDARD_LAYOUT_EXTENSION_NAME = 'VK_KHR_uniform_buffer_standard_layout';

    /**
     * @var string
     */
    public const VK_KHR_BUFFER_DEVICE_ADDRESS_EXTENSION_NAME = 'VK_KHR_buffer_device_address';

    /**
     * @var string
     */
    public const VK_KHR_PIPELINE_EXECUTABLE_PROPERTIES_EXTENSION_NAME = 'VK_KHR_pipeline_executable_properties';

    /**
     * @var string
     */
    public const VK_KHR_SHADER_NON_SEMANTIC_INFO_EXTENSION_NAME = 'VK_KHR_shader_non_semantic_info';

    /**
     * @var string
     */
    public const VK_EXT_DEBUG_REPORT_EXTENSION_NAME = 'VK_EXT_debug_report';

    /**
     * @var string
     */
    public const VK_NV_GLSL_SHADER_EXTENSION_NAME = 'VK_NV_glsl_shader';

    /**
     * @var string
     */
    public const VK_EXT_DEPTH_RANGE_UNRESTRICTED_EXTENSION_NAME = 'VK_EXT_depth_range_unrestricted';

    /**
     * @var string
     */
    public const VK_IMG_FILTER_CUBIC_EXTENSION_NAME = 'VK_IMG_filter_cubic';

    /**
     * @var string
     */
    public const VK_AMD_RASTERIZATION_ORDER_EXTENSION_NAME = 'VK_AMD_rasterization_order';

    /**
     * @var string
     */
    public const VK_AMD_SHADER_TRINARY_MINMAX_EXTENSION_NAME = 'VK_AMD_shader_trinary_minmax';

    /**
     * @var string
     */
    public const VK_AMD_SHADER_EXPLICIT_VERTEX_PARAMETER_EXTENSION_NAME = 'VK_AMD_shader_explicit_vertex_parameter';

    /**
     * @var string
     */
    public const VK_EXT_DEBUG_MARKER_EXTENSION_NAME = 'VK_EXT_debug_marker';

    /**
     * @var string
     */
    public const VK_AMD_GCN_SHADER_EXTENSION_NAME = 'VK_AMD_gcn_shader';

    /**
     * @var string
     */
    public const VK_NV_DEDICATED_ALLOCATION_EXTENSION_NAME = 'VK_NV_dedicated_allocation';

    /**
     * @var string
     */
    public const VK_EXT_TRANSFORM_FEEDBACK_EXTENSION_NAME = 'VK_EXT_transform_feedback';

    /**
     * @var string
     */
    public const VK_NVX_IMAGE_VIEW_HANDLE_EXTENSION_NAME = 'VK_NVX_image_view_handle';

    /**
     * @var string
     */
    public const VK_AMD_DRAW_INDIRECT_COUNT_EXTENSION_NAME = 'VK_AMD_draw_indirect_count';

    /**
     * @var string
     */
    public const VK_AMD_NEGATIVE_VIEWPORT_HEIGHT_EXTENSION_NAME = 'VK_AMD_negative_viewport_height';

    /**
     * @var string
     */
    public const VK_AMD_GPU_SHADER_HALF_FLOAT_EXTENSION_NAME = 'VK_AMD_gpu_shader_half_float';

    /**
     * @var string
     */
    public const VK_AMD_SHADER_BALLOT_EXTENSION_NAME = 'VK_AMD_shader_ballot';

    /**
     * @var string
     */
    public const VK_AMD_TEXTURE_GATHER_BIAS_LOD_EXTENSION_NAME = 'VK_AMD_texture_gather_bias_lod';

    /**
     * @var string
     */
    public const VK_AMD_SHADER_INFO_EXTENSION_NAME = 'VK_AMD_shader_info';

    /**
     * @var string
     */
    public const VK_AMD_SHADER_IMAGE_LOAD_STORE_LOD_EXTENSION_NAME = 'VK_AMD_shader_image_load_store_lod';

    /**
     * @var string
     */
    public const VK_NV_CORNER_SAMPLED_IMAGE_EXTENSION_NAME = 'VK_NV_corner_sampled_image';

    /**
     * @var string
     */
    public const VK_IMG_FORMAT_PVRTC_EXTENSION_NAME = 'VK_IMG_format_pvrtc';

    /**
     * @var string
     */
    public const VK_NV_EXTERNAL_MEMORY_CAPABILITIES_EXTENSION_NAME = 'VK_NV_external_memory_capabilities';

    /**
     * @var string
     */
    public const VK_NV_EXTERNAL_MEMORY_EXTENSION_NAME = 'VK_NV_external_memory';

    /**
     * @var string
     */
    public const VK_EXT_VALIDATION_FLAGS_EXTENSION_NAME = 'VK_EXT_validation_flags';

    /**
     * @var string
     */
    public const VK_EXT_SHADER_SUBGROUP_BALLOT_EXTENSION_NAME = 'VK_EXT_shader_subgroup_ballot';

    /**
     * @var string
     */
    public const VK_EXT_SHADER_SUBGROUP_VOTE_EXTENSION_NAME = 'VK_EXT_shader_subgroup_vote';

    /**
     * @var string
     */
    public const VK_EXT_TEXTURE_COMPRESSION_ASTC_HDR_EXTENSION_NAME = 'VK_EXT_texture_compression_astc_hdr';

    /**
     * @var string
     */
    public const VK_EXT_ASTC_DECODE_MODE_EXTENSION_NAME = 'VK_EXT_astc_decode_mode';

    /**
     * @var string
     */
    public const VK_EXT_CONDITIONAL_RENDERING_EXTENSION_NAME = 'VK_EXT_conditional_rendering';

    /**
     * @var string
     */
    public const VK_NV_CLIP_SPACE_W_SCALING_EXTENSION_NAME = 'VK_NV_clip_space_w_scaling';

    /**
     * @var string
     */
    public const VK_EXT_DIRECT_MODE_DISPLAY_EXTENSION_NAME = 'VK_EXT_direct_mode_display';

    /**
     * @var string
     */
    public const VK_EXT_DISPLAY_SURFACE_COUNTER_EXTENSION_NAME = 'VK_EXT_display_surface_counter';

    /**
     * @var string
     */
    public const VK_EXT_DISPLAY_CONTROL_EXTENSION_NAME = 'VK_EXT_display_control';

    /**
     * @var string
     */
    public const VK_GOOGLE_DISPLAY_TIMING_EXTENSION_NAME = 'VK_GOOGLE_display_timing';

    /**
     * @var string
     */
    public const VK_NV_SAMPLE_MASK_OVERRIDE_COVERAGE_EXTENSION_NAME = 'VK_NV_sample_mask_override_coverage';

    /**
     * @var string
     */
    public const VK_NV_GEOMETRY_SHADER_PASSTHROUGH_EXTENSION_NAME = 'VK_NV_geometry_shader_passthrough';

    /**
     * @var string
     */
    public const VK_NV_VIEWPORT_ARRAY2_EXTENSION_NAME = 'VK_NV_viewport_array2';

    /**
     * @var string
     */
    public const VK_NVX_MULTIVIEW_PER_VIEW_ATTRIBUTES_EXTENSION_NAME = 'VK_NVX_multiview_per_view_attributes';

    /**
     * @var string
     */
    public const VK_NV_VIEWPORT_SWIZZLE_EXTENSION_NAME = 'VK_NV_viewport_swizzle';

    /**
     * @var string
     */
    public const VK_EXT_DISCARD_RECTANGLES_EXTENSION_NAME = 'VK_EXT_discard_rectangles';

    /**
     * @var string
     */
    public const VK_EXT_CONSERVATIVE_RASTERIZATION_EXTENSION_NAME = 'VK_EXT_conservative_rasterization';

    /**
     * @var string
     */
    public const VK_EXT_DEPTH_CLIP_ENABLE_EXTENSION_NAME = 'VK_EXT_depth_clip_enable';

    /**
     * @var string
     */
    public const VK_EXT_SWAPCHAIN_COLOR_SPACE_EXTENSION_NAME = 'VK_EXT_swapchain_colorspace';

    /**
     * @var string
     */
    public const VK_EXT_HDR_METADATA_EXTENSION_NAME = 'VK_EXT_hdr_metadata';

    /**
     * @var string
     */
    public const VK_EXT_EXTERNAL_MEMORY_DMA_BUF_EXTENSION_NAME = 'VK_EXT_external_memory_dma_buf';

    /**
     * @var string
     */
    public const VK_EXT_QUEUE_FAMILY_FOREIGN_EXTENSION_NAME = 'VK_EXT_queue_family_foreign';

    /**
     * @var string
     */
    public const VK_EXT_DEBUG_UTILS_EXTENSION_NAME = 'VK_EXT_debug_utils';

    /**
     * @var string
     */
    public const VK_EXT_SAMPLER_FILTER_MINMAX_EXTENSION_NAME = 'VK_EXT_sampler_filter_minmax';

    /**
     * @var string
     */
    public const VK_AMD_GPU_SHADER_INT16_EXTENSION_NAME = 'VK_AMD_gpu_shader_int16';

    /**
     * @var string
     */
    public const VK_AMD_MIXED_ATTACHMENT_SAMPLES_EXTENSION_NAME = 'VK_AMD_mixed_attachment_samples';

    /**
     * @var string
     */
    public const VK_AMD_SHADER_FRAGMENT_MASK_EXTENSION_NAME = 'VK_AMD_shader_fragment_mask';

    /**
     * @var string
     */
    public const VK_EXT_INLINE_UNIFORM_BLOCK_EXTENSION_NAME = 'VK_EXT_inline_uniform_block';

    /**
     * @var string
     */
    public const VK_EXT_SHADER_STENCIL_EXPORT_EXTENSION_NAME = 'VK_EXT_shader_stencil_export';

    /**
     * @var string
     */
    public const VK_EXT_SAMPLE_LOCATIONS_EXTENSION_NAME = 'VK_EXT_sample_locations';

    /**
     * @var string
     */
    public const VK_EXT_BLEND_OPERATION_ADVANCED_EXTENSION_NAME = 'VK_EXT_blend_operation_advanced';

    /**
     * @var string
     */
    public const VK_NV_FRAGMENT_COVERAGE_TO_COLOR_EXTENSION_NAME = 'VK_NV_fragment_coverage_to_color';

    /**
     * @var string
     */
    public const VK_NV_FRAMEBUFFER_MIXED_SAMPLES_EXTENSION_NAME = 'VK_NV_framebuffer_mixed_samples';

    /**
     * @var string
     */
    public const VK_NV_FILL_RECTANGLE_EXTENSION_NAME = 'VK_NV_fill_rectangle';

    /**
     * @var string
     */
    public const VK_EXT_POST_DEPTH_COVERAGE_EXTENSION_NAME = 'VK_EXT_post_depth_coverage';

    /**
     * @var string
     */
    public const VK_EXT_IMAGE_DRM_FORMAT_MODIFIER_EXTENSION_NAME = 'VK_EXT_image_drm_format_modifier';

    /**
     * @var string
     */
    public const VK_EXT_VALIDATION_CACHE_EXTENSION_NAME = 'VK_EXT_validation_cache';

    /**
     * @var string
     */
    public const VK_EXT_DESCRIPTOR_INDEXING_EXTENSION_NAME = 'VK_EXT_descriptor_indexing';

    /**
     * @var string
     */
    public const VK_EXT_SHADER_VIEWPORT_INDEX_LAYER_EXTENSION_NAME = 'VK_EXT_shader_viewport_index_layer';

    /**
     * @var string
     */
    public const VK_NV_SHADING_RATE_IMAGE_EXTENSION_NAME = 'VK_NV_shading_rate_image';

    /**
     * @var string
     */
    public const VK_NV_RAY_TRACING_EXTENSION_NAME = 'VK_NV_ray_tracing';

    /**
     * @var string
     */
    public const VK_NV_REPRESENTATIVE_FRAGMENT_TEST_EXTENSION_NAME = 'VK_NV_representative_fragment_test';

    /**
     * @var string
     */
    public const VK_EXT_FILTER_CUBIC_EXTENSION_NAME = 'VK_EXT_filter_cubic';

    /**
     * @var string
     */
    public const VK_EXT_GLOBAL_PRIORITY_EXTENSION_NAME = 'VK_EXT_global_priority';

    /**
     * @var string
     */
    public const VK_EXT_EXTERNAL_MEMORY_HOST_EXTENSION_NAME = 'VK_EXT_external_memory_host';

    /**
     * @var string
     */
    public const VK_AMD_BUFFER_MARKER_EXTENSION_NAME = 'VK_AMD_buffer_marker';

    /**
     * @var string
     */
    public const VK_AMD_PIPELINE_COMPILER_CONTROL_EXTENSION_NAME = 'VK_AMD_pipeline_compiler_control';

    /**
     * @var string
     */
    public const VK_EXT_CALIBRATED_TIMESTAMPS_EXTENSION_NAME = 'VK_EXT_calibrated_timestamps';

    /**
     * @var string
     */
    public const VK_AMD_SHADER_CORE_PROPERTIES_EXTENSION_NAME = 'VK_AMD_shader_core_properties';

    /**
     * @var string
     */
    public const VK_AMD_MEMORY_OVERALLOCATION_BEHAVIOR_EXTENSION_NAME = 'VK_AMD_memory_overallocation_behavior';

    /**
     * @var string
     */
    public const VK_EXT_VERTEX_ATTRIBUTE_DIVISOR_EXTENSION_NAME = 'VK_EXT_vertex_attribute_divisor';

    /**
     * @var string
     */
    public const VK_EXT_PIPELINE_CREATION_FEEDBACK_EXTENSION_NAME = 'VK_EXT_pipeline_creation_feedback';

    /**
     * @var string
     */
    public const VK_NV_COMPUTE_SHADER_DERIVATIVES_EXTENSION_NAME = 'VK_NV_compute_shader_derivatives';

    /**
     * @var string
     */
    public const VK_NV_MESH_SHADER_EXTENSION_NAME = 'VK_NV_mesh_shader';

    /**
     * @var string
     */
    public const VK_NV_FRAGMENT_SHADER_BARYCENTRIC_EXTENSION_NAME = 'VK_NV_fragment_shader_barycentric';

    /**
     * @var string
     */
    public const VK_NV_SHADER_IMAGE_FOOTPRINT_EXTENSION_NAME = 'VK_NV_shader_image_footprint';

    /**
     * @var string
     */
    public const VK_NV_SCISSOR_EXCLUSIVE_EXTENSION_NAME = 'VK_NV_scissor_exclusive';

    /**
     * @var string
     */
    public const VK_NV_DEVICE_DIAGNOSTIC_CHECKPOINTS_EXTENSION_NAME = 'VK_NV_device_diagnostic_checkpoints';

    /**
     * @var string
     */
    public const VK_INTEL_SHADER_INTEGER_FUNCTIONS_2_EXTENSION_NAME = 'VK_INTEL_shader_integer_functions2';

    /**
     * @var string
     */
    public const VK_INTEL_PERFORMANCE_QUERY_EXTENSION_NAME = 'VK_INTEL_performance_query';

    /**
     * @var string
     */
    public const VK_EXT_PCI_BUS_INFO_EXTENSION_NAME = 'VK_EXT_pci_bus_info';

    /**
     * @var string
     */
    public const VK_AMD_DISPLAY_NATIVE_HDR_EXTENSION_NAME = 'VK_AMD_display_native_hdr';

    /**
     * @var string
     */
    public const VK_EXT_FRAGMENT_DENSITY_MAP_EXTENSION_NAME = 'VK_EXT_fragment_density_map';

    /**
     * @var string
     */
    public const VK_EXT_SCALAR_BLOCK_LAYOUT_EXTENSION_NAME = 'VK_EXT_scalar_block_layout';

    /**
     * @var string
     */
    public const VK_GOOGLE_HLSL_FUNCTIONALITY1_EXTENSION_NAME = 'VK_GOOGLE_hlsl_functionality1';

    /**
     * @var string
     */
    public const VK_GOOGLE_DECORATE_STRING_EXTENSION_NAME = 'VK_GOOGLE_decorate_string';

    /**
     * @var string
     */
    public const VK_AMD_SHADER_CORE_PROPERTIES_2_EXTENSION_NAME = 'VK_AMD_shader_core_properties2';

    /**
     * @var string
     */
    public const VK_AMD_DEVICE_COHERENT_MEMORY_EXTENSION_NAME = 'VK_AMD_device_coherent_memory';

    /**
     * @var string
     */
    public const VK_EXT_MEMORY_BUDGET_EXTENSION_NAME = 'VK_EXT_memory_budget';

    /**
     * @var string
     */
    public const VK_EXT_MEMORY_PRIORITY_EXTENSION_NAME = 'VK_EXT_memory_priority';

    /**
     * @var string
     */
    public const VK_NV_DEDICATED_ALLOCATION_IMAGE_ALIASING_EXTENSION_NAME = 'VK_NV_dedicated_allocation_image_aliasing';

    /**
     * @var string
     */
    public const VK_EXT_BUFFER_DEVICE_ADDRESS_EXTENSION_NAME = 'VK_EXT_buffer_device_address';

    /**
     * @var string
     */
    public const VK_EXT_TOOLING_INFO_EXTENSION_NAME = 'VK_EXT_tooling_info';

    /**
     * @var string
     */
    public const VK_EXT_SEPARATE_STENCIL_USAGE_EXTENSION_NAME = 'VK_EXT_separate_stencil_usage';

    /**
     * @var string
     */
    public const VK_EXT_VALIDATION_FEATURES_EXTENSION_NAME = 'VK_EXT_validation_features';

    /**
     * @var string
     */
    public const VK_NV_COOPERATIVE_MATRIX_EXTENSION_NAME = 'VK_NV_cooperative_matrix';

    /**
     * @var string
     */
    public const VK_NV_COVERAGE_REDUCTION_MODE_EXTENSION_NAME = 'VK_NV_coverage_reduction_mode';

    /**
     * @var string
     */
    public const VK_EXT_FRAGMENT_SHADER_INTERLOCK_EXTENSION_NAME = 'VK_EXT_fragment_shader_interlock';

    /**
     * @var string
     */
    public const VK_EXT_YCBCR_IMAGE_ARRAYS_EXTENSION_NAME = 'VK_EXT_ycbcr_image_arrays';

    /**
     * @var string
     */
    public const VK_EXT_HEADLESS_SURFACE_EXTENSION_NAME = 'VK_EXT_headless_surface';

    /**
     * @var string
     */
    public const VK_EXT_LINE_RASTERIZATION_EXTENSION_NAME = 'VK_EXT_line_rasterization';

    /**
     * @var string
     */
    public const VK_EXT_HOST_QUERY_RESET_EXTENSION_NAME = 'VK_EXT_host_query_reset';

    /**
     * @var string
     */
    public const VK_EXT_INDEX_TYPE_UINT8_EXTENSION_NAME = 'VK_EXT_index_type_uint8';

    /**
     * @var string
     */
    public const VK_EXT_SHADER_DEMOTE_TO_HELPER_INVOCATION_EXTENSION_NAME = 'VK_EXT_shader_demote_to_helper_invocation';

    /**
     * @var string
     */
    public const VK_NV_DEVICE_GENERATED_COMMANDS_EXTENSION_NAME = 'VK_NV_device_generated_commands';

    /**
     * @var string
     */
    public const VK_EXT_TEXEL_BUFFER_ALIGNMENT_EXTENSION_NAME = 'VK_EXT_texel_buffer_alignment';

    /**
     * @var string
     */
    public const VK_QCOM_RENDER_PASS_TRANSFORM_EXTENSION_NAME = 'VK_QCOM_render_pass_transform';

    /**
     * @var string
     */
    public const VK_GOOGLE_USER_TYPE_EXTENSION_NAME = 'VK_GOOGLE_user_type';

    /**
     * @var string
     */
    public const VK_EXT_PIPELINE_CREATION_CACHE_CONTROL_EXTENSION_NAME = 'VK_EXT_pipeline_creation_cache_control';

    /**
     * @var string
     */
    public const VK_NV_DEVICE_DIAGNOSTICS_CONFIG_EXTENSION_NAME = 'VK_NV_device_diagnostics_config';
}
